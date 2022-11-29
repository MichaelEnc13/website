<div class="sistems__container">
    <h1 class="title">Tienda de sistemas</h1>
    
    <?php
        include file_exists("../../post_creator/model/autoload") ? "../../post_creator/model/autoload" : "post_creator/model/autoload.php";
        $posts = Poster::get_all_post()['data'];
    ?>

    <div class="sistem_wrapper">



        <?php
        foreach ($posts as $post) :
            $imgs = Poster::get_imgs($post['id'])['data']->fetchAll();
 
            $img_name = $imgs[0]['img_name'];
        
            $img_uri = "src/uploads/post_" . $post['id'] . "/". $img_name;
            // var_dump($img['img_1']['name'])
        ?>
            <section class="sistems ">
                <div class="sistem__pic">
                    <img src="<?php echo $img_uri ?>" alt="Foto del sistema">
                </div>
                <div class="sistem__info">
                    <h2 class="sistem__info__title"><?php echo $post['title'] ?></h2>
                    <div class="sistem__info__description">
                        <?php echo $post['description'] ?>
                    </div>
                    <button class="btn read_post" data-id="<?php echo $post['id'] ?>">Ver más</button>
                </div>
           
            </section>
           <?php 
      
        
        
        
        endforeach; ?>
    </div>
</div>