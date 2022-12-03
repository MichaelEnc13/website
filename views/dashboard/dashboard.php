<?php include "nav.php";



include file_exists("../../post_creator/model/autoload") ? "../../post_creator/model/autoload" : "post_creator/model/autoload.php";
$posts = Poster::get_all_post()['data'];

?>

<div class="sistem__dashboard">
    <h1>Lista de post</h1>

    <div class="sistems_wrapper">









        <table id="table" class="table  table-hover display  dataTable dtr-inline collapsed">

            <thead>
                <tr>
                    <td>id</td>
                    <td>Titulo</td>
                    <td>Subtitulo</td>
                    <td>Descripción</td>
                    <td>Fecha</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </thead>

            <tbody>

                <?php
                foreach ($posts as $post) :
                    $imgs = Poster::get_imgs($post['id'])['data']->fetchAll();

                    $img_name = $imgs[0]['img_name'];

                    $img_uri = "src/uploads/post_" . $post['id'] . "/" . $img_name;
                    // var_dump($img['img_1']['name'])
                ?>

                    <tr>
                        <td><?php echo $post['id']; ?></td>
                        <td>RD <?php echo $post['title']; ?> </td>
                        <td><?php echo $post['subtitle']; ?></td>
                        <td><?php echo $post['description']; ?></td>
                        <td><?php echo $post['date']; ?></td>
                        <td><a href="#?<?php echo $post['id']; ?>"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td id="delete" data-id="<?php echo $post['id']; ?>"><i class="fa-solid fa-trash"></i></td>
                        <td class="data read_post" data-id="<?php echo $post['id']; ?>"><i class="fa-solid fa-link"></i></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>


    </div>




</div>
</div>

<?php include "footer.php" ?>