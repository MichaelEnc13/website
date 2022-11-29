
<?php
    include file_exists("autoload.php") ? "autoload.php" : "post_creator/model/autoload.php";
    $posts = Poster::get_post($_GET['id'])['data']->fetch();
    $datos= json_decode($posts['plan'], true);
    $imgs = Poster::get_imgs($_GET['id'])['data']->fetchAll();
 
    $img_name_1=$imgs[0]['img_name'];
    $img_name_2=$imgs[1]['img_name'];
    $img_name_3=$imgs[2]['img_name'];
    $img_name_4=$imgs[3]['img_name'];
 
    $img_1 = "src/uploads/post_".$posts['id']."/".$img_name_1;
    $img_2 = "src/uploads/post_".$posts['id']."/".$img_name_2;
    $img_3 = "src/uploads/post_".$posts['id']."/".$img_name_3;
    $img_4 = "src/uploads/post_".$posts['id']."/".$img_name_4;
 
?>
<header class="sistem_info_header">
    <div class="sistem_info_header_overlay"></div>
    <img src="<?php echo $img_1?>" alt="">

    <div class="sistem_info_header_text">
        <h1 class="sistem_name"><?php echo $posts['title'] ?></h1>
        <h3 class="sistem_info"><?php echo $posts['subtitle'] ?></h3>
    </div>

</header>