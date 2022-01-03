<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kalendarium extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('kalendarium_model');
        $this->load->library('session');
        
    }

    public function index()
    {
        //$this->load->view('kalendarium/megjelenit');

        $rand = $this->kalendarium_model->kalendarium_random();
        $data['adventi_kalendarium'] = $rand;
        $this->load->view('kalendarium/megjelenit', $data);
    }

    public function tetelek()
    {

        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                $this->load->view('kalendarium/tetelek');      
                break;
            case 'POST':
                $this->load->library('form_validation');
                $this->form_validation->set_rules('tartalom', 'Tartalom', 'trim|required');

                if ($this->form_validation->run() == FALSE)
                {
                    $errors = validation_errors();
                    $array['errors'] = $errors;
                    $this->session->set_flashdata( $array );
                    redirect('kalendarium/tetelek');  
                }
                else
                {
                    $data = [];
                    $data['tartalom'] = $this->input->post('tartalom');
                    $id = $this->kalendarium_model->tetelek_rogzitese($data);
                    $success = "<p>Sikeres Rögzítés</p>";
                    $array['success'] = $success;
                    $this->session->set_flashdata( $array );
                    redirect('kalendarium/tetelek');  
                }
                break;
        }


        $adventi_kalendarium = $this->kalendarium_model->kalendarium_megjelenitese();
        $data['adventi_kalendarium'] = $adventi_kalendarium;
        $this->load->view('kalendarium/listaz', $data);
        
    }

    

}

/* End of file Controllername.php */

?>