<?php include "views/header.php" ?>
<?php  
session_start();
session_destroy();
?>
<?php include "views/login/login.php" ?>

<script src="src/libs/sweetAlert.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>

<?php if ($_SERVER['SERVER_ADDR'] == "::1") : ?>
    <script src="src/js/script.js"></script>
<?php else : ?>
    <script src="src/js/script.min.js"></script>
<?php endif ?>