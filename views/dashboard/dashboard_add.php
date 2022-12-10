<?php include "nav.php";

 
?>
<div class="container__dash">
    <div class="sistem__dashboard sistem__dashboard--add">
        <form class="create" onsubmit="return false" enctype="multipart/form-data">
            <div class="container__text__add">
                <div class="container__text">
                    <div class="title">
                        <h3>Title</h3>
                    </div>
                    <input type="text" name="title">
                </div>
                <div class="container__text">
                    <div class="title">
                        <h3>Subtitle</h3>
                    </div>
                    <input type="text" name="subtitle">
                </div>
            </div>


            <div class="textarea_container">
                <div class="container__textarea">
                    <h3 class="title">Descripción</h3>
                    <textarea class="textarea" placeholder="Descripcion" id="description" name="description"></textarea>
                </div>

                <div class="container__textarea">
                    <h3 class="title">Caracteristicas</h3>
                    <textarea class="textarea" placeholder="Caracteristicas" id="features" name="features"></textarea>
                </div>
            </div>

            <div class="container__img__dash__add">

                <div class="img__add">
                    <input type="file" class="img_post" name="img_1" id="img_1" data-preview="preview_1">
                    <label for="img_1"><i class="fa-regular fa-images"></i></label>
                    <img class="preview" id="preview_1">
                </div>

                <div class="img__add">
                    <input type="file" class="img_post" name="img_2" id="img_2" data-preview="preview_2">
                    <label for="img_2"><i class="fa-regular fa-images"></i></label>
                    <img class="preview" id="preview_2">
                </div>

                <div class="img__add">
                    <input type="file" class="img_post" name="img_3" id="img_3" data-preview="preview_3">
                    <label for="img_3"><i class="fa-regular fa-images"></i></label>
                    <img class="preview" id="preview_3">
                </div>

                <div class="img__add">
                    <input type="file" class="img_post" name="img_4" id="img_4" data-preview="preview_4">
                    <label for="img_4"><i class="fa-regular fa-images"></i></label>
                    <img class="preview" id="preview_4">
                </div>

            </div>

            <div>



                <h4 class="title__plane">Planes</h4>
                
                <div class="input-control">
                    <div class="container__text">
                        <div class="title">
                            <h4 class="title">Nombre</h4>
                        </div>
                        <input type="text" placeholder="Nombre" name="plan_name">

                    </div>

                    <div class="container__text">
                        <div class="title">
                            <h4 class="title">Descripcion</h4>
                        </div>
                        <input type="text" placeholder="Descripcion" name="plan_desc">

                    </div>
                </div>


                <div class="container__text container__text--accion">
                    <div class="title">
                        <h4 class="title">Accion</h4>
                    </div>
                    <input type="text" placeholder="Nombre" name="plan_action_name">
                    <input type="text" placeholder="url" name="plan_action_url">
                    <input type="text" placeholder="Precio" name="plan_action_price">
                </div>
                <div>
                    <input class="check" type="checkbox" name="opening">
                    <button class="add__dash" id="create">Crear</button>
                </div>
            </div>
        </form>

    </div>

    <?php include "footer.php" ?>