<?php



class Db
{

    private const DB_USER = "u790594714_ds";
    private const DB_PASS = "DotsellSolPass2022@";
    private const DB_NAME = "mysql:host=localhost;dbname=u790594714_ds";

    public static function connect()
    {

        return new PDO(Db::DB_NAME,Db::DB_USER,Db::DB_PASS);

    }
}
