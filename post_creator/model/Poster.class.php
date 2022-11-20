<?php



include file_exists("autoload.php") ? "autoload.php" : "../post_creator/model/autoload.php";


class Poster extends Db
{

    public static function create_test($data)
    {
        $json = json_encode($data);
        $array = array($json);
        $query = "INSERT INTO test (post_info) VALUES(?)";
        return Poster::queries($query, $array);
    }
    public static function create($title, $subtitle, $description, $features, $imgs, $plan, $date)
    {

        $array = array($title, $subtitle, $description, $features, $imgs, $plan, $date);
        $query = "INSERT INTO sistems_info (title,subtitle,description,features,imgs,plan,date) VALUES(?,?,?,?,?,?,?)";
        return Poster::queries($query, $array);
    }
    public static function update($title, $subtitle, $description, $features, $imgs, $plan, $date,$id)
    {
        $array = array($title, $subtitle, $description, $features, $imgs, $plan, $date,$id);
        $query = "UPDATE sistems_info SET  title=?,subtitle=?,description=?,features=?,imgs=?,plan=?,date=? WHERE id = ?";
        return Poster::queries($query, $array);
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
        return Poster::queries($query,false);
    }
    public static function get_post($id)
    {
        $array = array($id);
        $query = "SELECT * FROM sistems_info";
        return Poster::queries($query,$array);
    }
}

?>