<?php include "nav.php";

include file_exists("autoload.php") ? "autoload.php" : "post_creator/model/autoload.php";
$posts = Poster::get_post($_GET['id'])['data']->fetch();
Poster::get_status(0, $_GET['id']);
$datos = json_decode($posts['plan'], true);
$imgs = Poster::get_imgs($_GET['id'])['data']->fetchAll();

//var_dump($imgs);


$uri = "src/uploads/post_" . $posts['id'] . "/";



?>
<h1 class="btn__edit">Editando Sistema</h1>
<div class="container__dash">
    <div class="sistem__dashboard sistem__dashboard--add">
        <form class="update" onsubmit="return false" enctype="multipart/form-data">
            <div class="main_info_dash">
                <div class="main_info_form">
                    <div class="container__text__add">
                        <div class="container__text">
                            <div class="title">
                                <h3>Title</h3>
                            </div>
                            <input type="text" class="input_text" value="<?php echo $posts['title'] ?>" name="title">
                        </div>
                        <div class="container__text">
                            <div class="title">
                                <h3>Subtitle</h3>
                            </div>
                            <input type="text" class="input_text" value="<?php echo $posts['subtitle'] ?>" name="subtitle">
                        </div>
                    </div>


                    <div class="textarea_container">
                        <div class="container__textarea">
                            <h3 class="title">Descripción</h3>
                            <textarea class="textarea" placeholder="Descripcion" id="description" name="description"><?php echo $posts['description'] ?></textarea>
                        </div>

                        <div class="container__textarea">
                            <h3 class="title">Caracteristicas</h3>
                            <textarea class="textarea" placeholder="Caracteristicas" id="features" name="features"><?php echo $posts['features'] ?> </textarea>
                        </div>
                    </div>
                </div>

                

            </div>





            <h4 class="title__plane">Planes</h4>
            <div class="plan_container">
                <div class="plan_creator">
                    <h3>Plan 1</h3>
                    <div class="input-control">
                        <div class="container__text">
                            <div class="title">
                                <h4 class="title">Nombre</h4>
                            </div>
                            <input class="input_text" type="text" value="<?php echo $datos['plan_desc'] ?>" name="plan_name">

                        </div>

                        <div class="container__text">
                            <div class="title">
                                <h4 class="title">Descripcion</h4>
                            </div>
                            <!-- <input class="input_text" type="text"   name="plan_desc"> -->
                            <div class="container__textarea">

                                <textarea class="textarea" placeholder="Descripcion" id="description" name="plan_desc"><?php echo $datos['plan_desc'] ?></textarea>
                            </div>

                        </div>
                    </div>


                    <div class="container__text container__text--accion">
                        <div class="title">
                            <h4 class="title">Accion</h4>
                        </div>
                        <input class="input_text" type="text" value="<?php echo $datos['plan_action_name'] ?>" name="plan_action_name">
                        <input class="input_text" type="text" value="<?php echo $datos['plan_action_url'] ?>" name="plan_action_url">
                        <input class="input_text" type="text" value="<?php echo $datos['plan_action_price'] ?>" name="plan_action_price">
                    </div>

                </div>
                <div class="plan_creator">
                    <h3>Plan 2</h3>
                    <div class="input-control">
                        <div class="container__text">
                            <div class="title">
                                <h4 class="title">Nombre</h4>
                            </div>
                            <input class="input_text" type="text" value="<?php echo $datos['plan_desc'] ?>" name="plan_name_2">

                        </div>

                        <div class="container__text">
                            <div class="title">
                                <h4 class="title">Descripcion</h4>
                            </div>
                            <!-- <input class="input_text" type="text"   name="plan_desc"> -->
                            <div class="container__textarea">

                                <textarea class="textarea" placeholder="Descripcion" id="description" name="plan_desc_2"><?php echo $datos['plan_desc'] ?></textarea>
                            </div>

                        </div>
                    </div>


                    <div class="container__text container__text--accion">
                        <div class="title">
                            <h4 class="title">Accion</h4>
                        </div>
                        <input class="input_text" type="text" value="<?php echo $datos['plan_action_name'] ?>" name="plan_action_name_2">
                        <input class="input_text" type="text" value="<?php echo $datos['plan_action_url'] ?>" name="plan_action_url_2">
                        <input class="input_text" type="text" value="<?php echo $datos['plan_action_price'] ?>" name="plan_action_price_2">
                    </div>

                </div>
            </div>

        </form>

        

        <div class="container__img__dash__add">
                    <?php foreach ($imgs as $img) : ?>


                        <div class="img__add">
                            <form onsubmit='return false' class='update_img_form_<?php echo $img['id'] ?>' enctype="multipart/form-data">
                                <input type="file" name="img" id="img_<?php echo $img['id'] ?>" class="update_img" data-post_id="<?php echo $img['post_id'] ?>" data-img_id="<?php echo $img['id'] ?>">
                                <label class="select_new_pic" for="img_<?php echo $img['id'] ?>" data-img_id="<?php echo $img['id'] ?>" data-post_id="<?php echo $img['post_id'] ?>"><i class="fa-regular fa-images"></i></label>
                                <img class="preview" src="<?php echo $uri . $img['img_name'] ?>">
                            </form>
                        </div>


                    <?php endforeach; ?>
                </div>


            <div class="container_btn_update">
                <button class="add__dash" data-update="<?php echo $posts['id'] ?>" id="update">Terminar</button>
            </div>
      

    </div>





    <?php include "footer.php" ?>