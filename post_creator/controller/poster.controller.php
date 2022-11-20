<?php

include file_exists("autoload.php") ? "autoload.php" : "../post_creator/model/autoload.php";


if (isset($_REQUEST)) :
    $id = isset($_POST['id']) ? $_POST['id'] : "";
    $title = isset($_POST['title']) ? $_POST['title'] : "";
    $subtitle = isset($_POST['subtitle']) ? $_POST['subtitle'] : "";
    $description = isset($_POST['description']) ? $_POST['description'] : "";
    $features = isset($_POST['features']) ? $_POST['features'] : "";
    $imgs = isset($_FILES['imgs']) ? $_FILES['imgs'] : "";
    $plan = isset($_POST['plan']) ? $_POST['plan'] : "";
    $date = isset($_POST['date']) ? $_POST['date'] : "";



    if (isset($_POST['create'])) :
        $done = Poster::create(
            $title,
            $subtitle,
            $description,
            $features,
            $imgs,
            $plan,
            $date
        )['data'];
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
        )['data'];
    endif;
    if (isset($_POST['delete'])) :

        $done = Poster::delete($id)['data'];
    endif;
endif;
