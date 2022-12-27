<?php



include file_exists("autoload.php") ? "autoload.php" : "../post_creator/model/autoload.php";


class Poster extends Db
{
    public static function create_test($data)
    {
        $array = array($data);
        $query = "INSERT INTO test (post_info) VALUES(?)";
        return Poster::queries($query, $array);
    }
    public static function login_regiter($user,$pass)
    {
        $encriptar=password_hash($pass,PASSWORD_DEFAULT);
        $array=array($user,$encriptar);
        $query = "INSERT INTO login_dotsell (users, pass) values(?,?)";
        return Poster::queries($query, $array)['lastId'];
    }
    public static function login_start($user, $pass)
    {
        $array=array($user);
        $query = "SELECT * FROM login_dotsell WHERE users = ?";
        $name =Poster::queries($query, $array)['data']->fetch();

        if(password_verify($pass,$name['pass'])){
            session_start();
            $_SESSION['user'] = $name["users"];
            echo true;
        }else{
            echo false;  
        }
    }
    public static function verificar_post($status)
    {
            $array=array($status);
            $query = "SELECT * FROM sistems_info WHERE status = ?";
            return Poster::queries($query, $array)['data']->fetch();
    }
    public static function post_update()
    {
        $array = array($title="", $subtitle="", $description="", $features="", $imgs="{}", $plan="{}", $date="");
        $query = "INSERT INTO sistems_info (title,subtitle,description,features,imgs,plan,date) VALUES(?,?,?,?,?,?,?)";
        $id_post =Poster::queries($query, $array);
        return $id_post;
    }
    public static function create($title, $subtitle, $description, $features, $imgs, $plan, $date)
    {
        $array = array($title, $subtitle, $description, $features, $imgs, $plan, $date);
        $query = "INSERT INTO sistems_info (title,subtitle,description,features,imgs,plan,date) VALUES(?,?,?,?,?,?,?)";
        return Poster::queries($query, $array);
    }
    public static function update($title, $subtitle, $description, $features, $imgs, $plan, $date, $id)
    {
        $array = array($title, $subtitle, $description, $features, $imgs, $plan, $date, $id);
        $query = "UPDATE sistems_info SET  title=?,subtitle=?,description=?,features=?,imgs=?,plan=?,date=? WHERE id = ?";
        return Poster::queries($query, $array);
    }
    public static function update_file($img_name, $img_id, $post_id)
    {
        $array = array($img_name, $img_id,$post_id);
        $query = "UPDATE post_imgs SET img_name=? WHERE id = ? AND post_id = ?";
        return Poster::queries($query, $array);
    }
    public static function get_status($status, $id)
    {
        $array = array($status, $id);
        $query = "UPDATE sistems_info SET status=? where id=?";
        return Poster::queries($query, $array);
    }
    public static function update_img($imgs, $id)
    {
        $name = $imgs['name'];
        $type = $imgs['type'];
        if ($type == "image/png" ||  $type == "image/jpg" || $type == "image/jpeg") :


            if (!is_dir("../../src/uploads/")) mkdir("../../src/uploads/");
            if (!is_dir("../../src/uploads/post_" . $id . "/")) mkdir("../../src/uploads/post_" . $id . "/");
        endif;
        return move_uploaded_file($imgs['tmp_name'], "../../src/uploads/post_" . $id . "/" . $name);
    }

    public static function delete($id)
    {

        $array = array($id);
        $query = "DELETE FROM sistems_info WHERE id = ?";
        return Poster::queries($query, $array);
    }
    public static function get_all_post()
    {
        $query = "SELECT * FROM sistems_info";
        return Poster::queries($query, false);
    }

    public static function get_post($id)
    {
        $array = array($id);
        $query = "SELECT * FROM sistems_info WHERE id = ?";
        return Poster::queries($query, $array);
    }
    public static function get_imgs($id)
    {
        $array = array($id);
        $query = "SELECT * FROM post_imgs WHERE post_id = ?";
        return Poster::queries($query, $array);
    }


    public static function save_file($img_name, $post_id)
    {
        $array = array($img_name, $post_id);
        $query = "INSERT INTO post_imgs (img_name,post_id) VALUES(?,?)";
        return Poster::queries($query, $array);
    }

    public static function upload($imgs, $id)
    {
        $name = $imgs['name'];
        $type = $imgs['type'];
        if ($type == "image/png" ||  $type == "image/jpg" || $type == "image/jpeg") :


            if (!is_dir("../../src/uploads/")) mkdir("../../src/uploads/");
            if (!is_dir("../../src/uploads/post_" . $id . "/")) mkdir("../../src/uploads/post_" . $id . "/");
        endif;
        return move_uploaded_file($imgs['tmp_name'], "../../src/uploads/post_" . $id . "/" . $name);
    }
}
