<?php

/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 12/12/16
 * Time: 22:32
 */
class DB
{

    //test
    private static $db;

    private function __construct(){}
    private function __clone(){}

    public static function getConnection()
    {
        if(self::$db === null) {
            self::$db = new mysqli('127.0.0.1', 'root', '', 'my_shop');
        }
        return self::$db;
    }
}