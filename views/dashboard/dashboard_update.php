<?php include "nav.php";

include file_exists("autoload.php") ? "autoload.php" : "post_creator/model/autoload.php";
$posts = Poster::get_post($_GET['id'])['data']->fetch();
$datos= json_decode($posts['plan'], true);
$imgs = Poster::get_imgs($_GET['id'])['data']->fetchAll();

$img_name_1=$imgs[0];
$img_name_2=$imgs[1];
$img_name_3=$imgs[2];
$img_name_4=$imgs[3];


$img_1 = "src/uploads/post_".$posts['id']."/".$img_name_1['img_name'];
$img_2 = "src/uploads/post_".$posts['id']."/".$img_name_2['img_name'];
$img_3 = "src/uploads/post_".$posts['id']."/".$img_name_3['img_name'];
$img_4 = "src/uploads/post_".$posts['id']."/".$img_name_4['img_name'];

?>
<h1 class="btn__edit">Editando Sistema</h1>
<div class="container__dash">
    <div class="sistem__dashboard sistem__dashboard--add">
        <form class="update" onsubmit="return false" enctype="multipart/form-data">
            <div class="container__text__add">
                <div class="container__text">
                    <div class="title">
                        <h3>Title</h3>
                    </div>
                    <input type="text" value="<?php echo $posts['title'] ?>" name="title">
                </div>
                <div class="container__text">
                    <div class="title">
                        <h3>Subtitle</h3>
                    </div>
                    <input type="text" value="<?php echo $posts['subtitle'] ?>" name="subtitle">
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

            <div class="container__img__dash__add">

                <div class="img__add">
                    <input type="file" class="img_post" name="<?php echo $img_name_1['id']?>" id="img_1" data-preview="preview_1">
                    <label for="img_1"><i class="fa-regular fa-images"></i></label>
                    <img class="preview" id="preview_1" src="<?php echo $img_1?>">
                </div>

                <div class="img__add">
                    <input type="file" class="img_post" name="<?php echo $img_name_2['id']?>" id="img_2" data-preview="preview_2">
                    <label for="img_2"><i class="fa-regular fa-images"></i></label>
                    <img class="preview" id="preview_2" src="<?php echo $img_2?>">
                </div>

                <div class="img__add">
                    <input type="file" class="img_post" name="<?php echo $img_name_3['id']?>" id="img_3" data-preview="preview_3">
                    <label for="img_3"><i class="fa-regular fa-images"></i></label>
                    <img class="preview" id="preview_3"  src="<?php echo $img_3?>">
                </div>

                <div class="img__add">
                    <input type="file" class="img_post" name="<?php echo $img_name_4['id']?>" id="img_4" data-preview="preview_4">
                    <label for="img_4"><i class="fa-regular fa-images"></i></label>
                    <img class="preview" id="preview_4" src="<?php echo $img_4?>">
                </div>

            </div>

            <div>

                <h4 class="title__plane">Planes</h4>
                
                <div class="input-control">
                    <div class="container__text">
                        <div class="title">
                            <h4 class="title">Nombre</h4>
                        </div>
                        <input type="text" value="<?php echo $datos['plan_desc']?>" name="plan_name">

                    </div>

                    <div class="container__text">
                        <div class="title">
                            <h4 class="title">Descripcion</h4>
                        </div>
                        <input type="text" value="<?php echo $datos['plan_desc']?>"  name="plan_desc">

                    </div>
                </div>


                <div class="container__text container__text--accion">
                    <div class="title">
                        <h4 class="title">Accion</h4>
                    </div>
                    <input type="text"  value="<?php echo $datos['plan_action_name']?>" name="plan_action_name">
                    <input type="text"  value="<?php echo $datos['plan_action_url']?>" name="plan_action_url">
                    <input type="text"  value="<?php echo $datos['plan_action_price']?>" name="plan_action_price">
                </div>
                <div>
                    <input class="check" type="checkbox" name="opening">
                    <button class="add__dash" data-update="<?php echo $posts['id']?>" id="update">Actualizar</button>
                </div>
            </div>
        </form>

    </div>

    <?php include "footer.php" ?>