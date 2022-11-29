<?php include "nav.php";



include file_exists("../../post_creator/model/autoload") ? "../../post_creator/model/autoload" : "post_creator/model/autoload.php";
$posts = Poster::get_all_post()['data'];

?>

<div class="sistem__dashboard">
<h1>Lista de post</h1>

<div class="sistems_wrapper">


    <?php
    foreach ($posts as $post) :
        $img = json_decode($post['imgs'], true);
        $img_name = $img['img_1']['name'];
        $img_uri = "src/uploads/post_" . $post['id'] . "/" . $post['id'] . "_img_" . $img_name;
        // var_dump($img['img_1']['name'])
    ?>


        <div class="container__system">
            <div class="info__system">
                <img class="img__system" src="<?= $img_uri ?>" alt="">
         
            </div>
            <div class="icon__system">
                    <i class='bx bxs-edit-alt'></i>
                    <i class='bx bxs-trash'></i>
                </div>
            <h3 class="name__system"><?= $post['title'] ?></h3>
        </div>
      
     


    <?php endforeach; ?>



    </div>




</div>
</div>

<?php include "footer.php" ?>