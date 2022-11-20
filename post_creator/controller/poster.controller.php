<?php

include file_exists("autoload.php") ? "autoload.php" : "../model/autoload.php";


if (isset($_REQUEST)) :
    $id = isset($_POST['id']) ? $_POST['id'] : "";
    $title = isset($_POST['title']) ? $_POST['title'] : "";
    $subtitle = isset($_POST['subtitle']) ? $_POST['subtitle'] : "";
    $description = isset($_POST['description']) ? $_POST['description'] : "";
    $features = isset($_POST['features']) ? $_POST['features'] : "";
    $imgs = isset($_FILES['imgs']) ? $_FILES['imgs'] : "";
    $plan = isset($_POST['plan']) ? $_POST['plan'] : "";
    $date = isset($_POST['date']) ? $_POST['date'] : "";

if(isset($_POST['create_test'])):
    $data = json_encode($_POST);
    $done = Poster::create_test($data);
    
    var_dump($data);

endif;

    if (isset($_POST['create'])) :
        $done = Poster::create(
            $title,
            $subtitle,
            $description,
            $features,
            $imgs,
            $plan,
            $date
        );
    endif;
    if (isset($_POST['update'])) :
        $done = Poster::update(
            $title,
            $subtitle,
            $description,
            $features,
            $imgs,
            $plan,
            $date,
            $id
        );
    endif;
    if (isset($_POST['delete'])) :

        $done = Poster::delete($id);
    endif;
endif;
