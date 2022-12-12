<?php


class Db
{

    static $user = "u790594714_dotsell";
    static $password = "DotsellSolPass2022@";
    static $host = "mysql:host=localhost;dbname=u790594714_dotsell";


    static $user_local = "root";
    static $password_local = "";
    static $host_local = "mysql:host=localhost;dbname=dotsellsolutions";



    public static function connect()
    {
        if ($_SERVER['REMOTE_ADDR'] == "::1") :

            return new PDO(Db::$host_local, Db::$user_local, Db::$password_local);
        else :
            return new PDO(Db::$host, Db::$user, Db::$password);
        endif;
     //   return new PDO(Db::$host_local, Db::$user_local, Db::$password_local);
    }


    public static function queries($query, $values)
    {

        $db = Db::connect();
        $cmd = $db->prepare($query);
        $done = $cmd->execute(is_array($values) ? $values : null);
        return array(
            "status" => $done,
            "data" => $cmd,
            "error" => $cmd->errorInfo(),
            "lastId" => $db->lastInsertId()

        );
    }
}
