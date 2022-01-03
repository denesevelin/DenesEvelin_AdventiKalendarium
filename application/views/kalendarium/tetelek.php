<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css">
    <title>Tételek</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="<?php echo base_url(); ?>kalendarium/index">Kalendárium</a></li>
            <li><a href="<?php echo base_url(); ?>kalendarium/tetelek">Tételek</a></li>
        </ul>        
    </nav>
    <?php if($this->session->userdata('errors')):?>
        <div >
        <?php echo $this->session->userdata('errors') ?>
        </div>
    <?php endif; ?>
    
    <?php if($this->session->userdata('success')):?>
        <div >
        <?php echo $this->session->userdata('success') ?>
        </div>
    <?php endif; ?>
    <div>
        <h1>Új tétel felvétele</h1>
        <form method="post">
            <input type="text" name="tartalom" id="tartalom" placeholder="Tartalom" required>
            <br>
            <br>
            <input type="submit" value="Rögzít">
        </form>
    </div>
    
    <div>
    <h1>Tételek</h1>
</body>
</html>