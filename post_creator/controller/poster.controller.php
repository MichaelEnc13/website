<?php

include file_exists("autoload.php") ? "autoload.php" : "../model/autoload.php";


if (isset($_REQUEST)) :
    $id = isset($_POST['id']) ? $_POST['id'] : "";
    $user = isset($_POST['usuario']) ? $_POST['usuario'] : "";
    $pass = isset($_POST['pass']) ? $_POST['pass'] : "";
    $id_img = isset($_POST['id_img']) ? $_POST['id_img'] : "";
    $status = isset($_POST['status']) ? $_POST['status'] : "";
    $title = isset($_POST['title']) ? $_POST['title'] : "";
    $subtitle = isset($_POST['subtitle']) ? $_POST['subtitle'] : "";
    $description = isset($_POST['description']) ? $_POST['description'] : "";
    $features = isset($_POST['features']) ? $_POST['features'] : "";
    $imgs = isset($_FILES) ? "$_FILES" : "";
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
    if (isset($_POST['update_img'])) :
        echo  $id_img;
        echo $id;
        $done = Poster::update_file($_FILES['img']['name'], $id_img,$id);//actualiza la base de datos
        echo $done['status'];
         Poster::upload($_FILES['img'],  $id);//actualiza los archivos 

    endif;
    if (isset($_POST['login'])) :
        $done = Poster::login_regiter($user, $pass);
        echo $done;
    endif;
    if (isset($_POST['new_post'])):
        $status=0;
        $done = Poster::verificar_post($status);
        if($done["status"]==""):
            $id = Poster::post_update();
            echo $id['lastId'];             
        else:
            echo $done["id"];  
         endif;
    endif;
    if (isset($_POST['login_start'])) :
        $done = Poster::login_start($user, $pass);
        echo $done;
    endif;
    if (isset($_POST['update_fish'])) :
        Poster::get_status($status, $id);
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
    endif;
    if (isset($_POST['delete'])) :

        $done = Poster::delete($id);



        $imgs = Poster::get_imgs($id)['data']->fetchAll();
        foreach ($imgs as $img) :
            unlink("../../src/uploads/post_" . $id . "/" . $img['img_name']);
        endforeach;
        rmdir("../../src/uploads/post_" . $id);
    endif;
endif;
