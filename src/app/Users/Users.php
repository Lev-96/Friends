<?php

namespace App\Users;

use App\Connect\Singleton;

session_start();

class Users
{
    /*************** Auth *************************/
    public static function auth()
    {
        $id = $_SESSION["id"];
        $auth_user = Singleton::getInstance()->query("SELECT * FROM `users` WHERE `id`='$id'")->fetch_object();
        return $auth_user;
    }
}
