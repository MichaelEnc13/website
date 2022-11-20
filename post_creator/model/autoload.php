<?php 
error_reporting(0);
spl_autoload_register(function($class){
    include_once $class.".class.php";
});

date_default_timezone_set("America/Santo_Domingo");