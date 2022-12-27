<?php include "views/header.php" ?>
<?php
session_start();
if (empty($_SESSION['user'])){
    return header("location:../login.php");
}?>
<?php include "views/dashboard/dashboard_add.php" ?>
 
