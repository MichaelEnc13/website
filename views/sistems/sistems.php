<?php

include file_exists("../../post_creator/model/autoload") ? "../../post_creator/model/autoload" : "post_creator/model/autoload.php";
$posts = Poster::get_all_post()['data'];
 
foreach ($posts as $post) :
    $img = json_decode($post['imgs'],true);
    $img_name = $img['img_1']['name'];
    $img_uri = "src/uploads/post_".$post['id']."/".$post['id']."_img_".$img_name;
   // var_dump($img['img_1']['name'])
   
?>

    <div class="sistems__container">
        <section class="sistems">
            <div class="sistem__pic">
                <img src="<?php echo $img_uri?>" alt="Foto del sistema">
            </div>
            <div class="sistem__info">
                <h2 class="sistem__info__title"><?php echo $post['title'] ?></h2>
                <div class="sistem__info__description">
                    <?php echo $post['description'] ?>
                </div>
                <button class="btn" data-id="<?php echo $post['id'] ?>">Ver más</button>
            </div>

        </section>
    </div>

<?php endforeach; ?>