<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kalendarium_model extends CI_Model 
{
    public function __construct() {
        $this->load->database();
    }

    public function kalendarium_megjelenitese()
    {
        return $this->db->get('adventi_kalendarium')->result_array();
    }
    
    public function tetelek_rogzitese($data)
    {
        $this->db->insert('adventi_kalendarium', $data);
        return $this->db->insert_id();
    }

    public function kalendarium_random()
    {
        $this->db->order_by('id', 'RANDOM');
        return $this->db->get('adventi_kalendarium')->result_array();
    }
    

}

/* End of file ModelName.php */

?>