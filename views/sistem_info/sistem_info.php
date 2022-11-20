<div class="sistem_info">
    <?php include "header.php" ?>

    <div class="sistem_description">
    <?php echo $post_info['description'] ?>    </div>

    <div class="sistem_screenshot">
        <h2 class="title">screenshots</h2>
        <div class="sistem_screenshot_container">
            <div class="screenshots">
                <img src="https://picsum.photos/300/300" alt="">
            </div>
            <div class="screenshots">
                <img src="https://picsum.photos/300/300" alt="">
            </div>
            <div class="screenshots">
                <img src="https://picsum.photos/300/300" alt="">
            </div>
        </div>

    </div>

    <div class="features">
        <div class="features_info">
            <h2 class="title">Caracteristicas</h2>
            <div class="features_info_data">
                <?php echo $post_info['features'] ?>
            </div>
        </div>
        <div class="features_info_img">
            <img src="https://picsum.photos/300/300" alt="">
        </div>
    </div>

    <div class="princing">
    <h2 class="title">Planes</h2>
        <div class="price">
            <div class="plan">
                <div class="plan__name">
                    Plan
                </div>

                <div class="plan__info">
                    Lorem ipsum dolor sit amet.
                </div>

                <div class="plan_action">
                    <button class="btn">Adquir</button>
                </div>


            </div>
            <div class="plan">
                <div class="plan__name">
                    Plan
                </div>

                <div class="plan__info">
                    Lorem ipsum dolor sit amet.
                </div>

                <div class="plan_action">
                    <button class="btn">Adquir</button>
                </div>


            </div>

        </div>
    </div>
</div>