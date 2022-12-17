<?php
//socials contact

$mail = "info@dotsellsolutions.com";
$instagram = "@DotsellSolutions";
$tel = "+1 829-445-5432";
$version = "1.0"


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/css/styles.css?<?php echo $version; ?>">
  <script src="src/libs/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="src/libs/trumbowyg.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

 

  <link rel="shortcut icon" href="src/img/logo.png" type="image/x-icon">



  <?php if ($_SERVER['SERVER_ADDR'] != "::1") : ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B5498KPHKT"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'G-B5498KPHKT');
    </script>
  <?php endif; ?>
  <meta name="description" content="Dotsell Solutions, buscando las mejores opciones para hacer que la productividad de tu negocio aumente. Introducete en la web y solicita el sistema que tu negocio necesita">
  <title>Dotsell Solutions</title>
</head>

<body>