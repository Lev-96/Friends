<?php
session_start();
require_once '../database/database.php';
global $db_connect;


$name = $_POST['name'];
$description = $_POST['description'];
$embed = $_POST['embed'];

$addVideos = $db_connect->query("INSERT INTO `tube` (`name_input`, `description`, `embed`, `user_id`) VALUES ('$name', '$description', '$embed', ".$_SESSION['id'].")");
if ($addVideos){
    $_SESSION['success'] = "Videos success ok";
    header("Location: ../../videos");
}else{
    $_SESSION['error'] = "Videos error, connect disable";
    header("Location: ../../404");
    die();
}
