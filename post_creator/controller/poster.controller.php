<?php

include file_exists("autoload.php") ? "autoload.php" : "../model/autoload.php";


if (isset($_REQUEST)) :
    $id = isset($_POST['id']) ? $_POST['id'] : "";
    $title = isset($_POST['title']) ? $_POST['title'] : "";
    $subtitle = isset($_POST['subtitle']) ? $_POST['subtitle'] : "";
    $description = isset($_POST['description']) ? $_POST['description'] : "";
    $features = isset($_POST['features']) ? $_POST['features'] : "";
    $imgs = isset($_FILES) ? $_FILES : "";
    $plan = isset($_POST['plan']) ? $_POST['plan'] : "";
    $date = date("d-m-Y");

    if (isset($_POST['create_test'])) : //SOLO PARA PRUEBAS JSON
        $json = array(
            "post_data" => $_POST,
            "post_files" => $_FILES
        );

        $data = json_encode($json);
        $done = Poster::create_test($data);
        $lastId = $data['lastId'];

        if ($done['status']) :
            foreach ($_FILES as $file) :
                Poster::save_file($file['name'], $lastId);
                Poster::upload($file, $done['lastId']);
            endforeach;
        endif;
    //var_dump($data);

    endif;

    if (isset($_POST['create'])) :
        $imgs = json_encode($_FILES);
        $plans = json_encode(array(

            "plan_name" => $_POST['plan_name'],
            "plan_desc" => $_POST['plan_desc'],
            "plan_action_name" => $_POST['plan_action_name'],
            "plan_action_url" => $_POST['plan_action_url'],
            "plan_action_price" => $_POST['plan_action_price']
        ));
        $done = Poster::create(
            $title,
            $subtitle,
            $description,
            $features,
            $imgs,
            $plan = $plans,
            $date
        );

        $lastId = $done['lastId'];
        if ($done['status']) :
            foreach ($_FILES as $file) :
                if ($file['name'] != "") :
                    Poster::save_file($file['name'], $lastId)['error'][2];
                    Poster::upload($file, $lastId);
                endif;
            endforeach;

        endif;
    endif;
    if (isset($_POST['update'])) :
        $plans = json_encode(array(

            "plan_name" => $_POST['plan_name'],
            "plan_desc" => $_POST['plan_desc'],
            "plan_action_name" => $_POST['plan_action_name'],
            "plan_action_url" => $_POST['plan_action_url'],
            "plan_action_price" => $_POST['plan_action_price']
        ));
         $done = Poster::update(
            $title,
            $subtitle,
            $description,
            $features,
            "{}",
            $plans,
            $date,
            $id
        ); 
        echo $done["status"];
        if ($done['status']) :
            foreach ($_FILES as $file) :
                if ($file['name'] != "") :
                    var_dump($file);
                    //Poster::update_file($file['name'], $id_img)['error'][2];
                   // Poster::update_img($file, $id_img);
                endif;
            endforeach;

        endif;
    endif;
    if (isset($_POST['delete'])) :

        $done = Poster::delete($id);
      
       
         
        $imgs = Poster::get_imgs($id)['data']->fetchAll();
        foreach($imgs as $img ):
           unlink("../../src/uploads/post_".$id."/".$img['img_name']);
        endforeach;
        rmdir("../../src/uploads/post_".$id);
    endif;
endif;
