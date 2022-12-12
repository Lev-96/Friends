<?php

namespace App\Users;

use App\Connect\Singleton;

session_start();

class Videos
{
    /*************** Users Videos *************************/

    public static function usersVideos()
    {
        $tube_id = $_SESSION["id"];
        $videos_user = Singleton::getInstance()->query("SELECT * FROM `tube` WHERE `user_id`='$tube_id'")->fetch_all(1);
        return $videos_user;
    }

    /*************** Users Delete Videos *************************/

    public static function deleteVideos()
    {
        require_once 'php/profile/ajax_request.php';
        $id = $_GET['id'];
        $delete_videos = Singleton::getInstance()->query("DELETE FROM `tube` WHERE `id`= '$id'");
        return $delete_videos;
    }
}
