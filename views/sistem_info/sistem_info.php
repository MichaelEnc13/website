<?php include "header.php" ?>

<div class="sistem_info">

    <div class="sistem_description">
    <?php echo $posts['description'] ?>    </div>

    <div class="sistem_screenshot">
        <h2 class="title"><?php echo $posts['subtitle'] ?></h2>
        <div class="sistem_screenshot_container">
            <div class="screenshots">
                <img src="<?php echo $img_1?>" alt="">
            </div>
            <div class="screenshots">
                 <img src="<?php echo $img_2?>" alt="">
            </div>
            <div class="screenshots">
                 <img src="<?php echo $img_3?>" alt="">
            </div>
        </div>

    </div>

    <div class="features">
        <div class="features_info">
            <h2 class="title">Caracteristicas</h2>
            <div class="features_info_data">
            <?php echo $posts['description'] ?> 
            </div>
        </div>
        <div class="features_info_img">
            <img src="<?php echo $img_4 ?>" alt="">
        </div>
    </div>

    <div class="princing">
    <h2 class="title">Planes</h2>
        <div class="price">
            <div class="plan">
                <div class="plan__name">
                    <?php echo $datos['plan_name']?>
                </div>

                <div class="plan__info">
                    <?php echo $datos['plan_desc']?>
                </div>

                <div class="plan_action">
                    <button class="btn" data-uri="<?php echo $datos['plan_action_url']?>"><?php echo $datos['plan_action_name']?></button>
                </div>


            </div>
        </div>
    </div>
</div>
