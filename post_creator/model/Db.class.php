<?php


class Db
{

    static $user = "u790594714_faceasy_bord";
    static $password = "Encarnacion132603@";
    static $host = "mysql:host=localhost;dbname=u790594714_faceasy_bord";


    static $user_local = "root";
    static $password_local = "";
    static $host_local = "mysql:host=localhost;dbname=dotsellsolutions";



    public static function connect()
    {
/*           if ($_SERVER['SERVER_ADDR'] == "localhost" || $_SERVER['SERVER_NAME'] == "192.168.1.14" || $_SERVER['SERVER_NAME'] == "::1") :

            return new PDO(Db::$host_local, Db::$user_local, Db::$password_local);
            else :
                return new PDO(Db::$host, Db::$user, Db::$password);
        endif;  */
        return new PDO(Db::$host_local, Db::$user_local, Db::$password_local);
    }


    public static function queries($query, $values)
    {

        $cmd = Db::connect()->prepare($query);
        $done = $cmd->execute(is_array($values) ? $values : null);
        return array(
            "status" => $done,
            "data" => $cmd,
            "error" => $cmd->errorInfo()

        );
    }
}
