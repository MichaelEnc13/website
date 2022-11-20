
<?php
    include file_exists("autoload.php") ? "autoload.php" : "post_creator/model/autoload.php";
    $post = Poster::get_post($_GET['id'])['data']->fetch()['post_info'];
    $post_info  = json_decode($post, true);
    


?>
<header class="sistem_info_header">
    <div class="sistem_info_header_overlay"></div>
    <img src="src/img/screenshots/seguros-client.png" alt="">

    <div class="sistem_info_header_text">
        <h1 class="sistem_name"><?php echo $post_info['title'] ?></h1>
        <h3 class="sistem_info"><?php echo $post_info['subtitle'] ?></h3>
    </div>

</header>