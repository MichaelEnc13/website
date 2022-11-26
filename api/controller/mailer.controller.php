<?php


include  file_exists("../model/autoload.php") ? "../model/autoload.php" : "model/autoload.php"; //incluir clases
 
if(isset($_POST['email'])):

    echo Mail::save_suscription($_POST['email']);

endif;

 