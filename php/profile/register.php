<?php
session_start();
require_once '../database/database.php';
global $db_connect;

$name = $_POST["name"];
$surname = $_POST["surname"];
$age = $_POST['age'];
$address = $_POST['address'];
$city = $_POST['city'];
$email = $_POST["email"];
$password = $_POST["password"];
$data = $_POST["data"];
$gender = $_POST["gender"];
$file = $_POST["avatar"];
require_once '../validation/register_validation.php';

$password_hash = password_hash($password, PASSWORD_DEFAULT);


$db_users = $db_connect->query("SELECT email FROM `users`")->fetch_all();
$isPass = true;
foreach ($db_users as $db_user) {
    if ($db_user[0] == $email) {
        $isPass = false;
    }
}


if ($isPass) {
    $_SESSION['success'] = 'Register Success Ok!';
    header("Location: ../login");

} else {
    $_SESSION['error'] = 'This account is already registered :(';
    header("Location: ../register");
    die();
}

if (isset($_POST['send'])) {
    $path = "../../images/img/";
    $filename = $_FILES["avatar"]["name"];
    $tempname = $_FILES["avatar"]["tmp_name"];
    $extension = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png' || $extension == 'gif' || $extension == 'jfif') {
        $folder = rand(0, 1000) . "_" . $filename;
        $uploads = $db_connect->query("INSERT INTO `users` ( `name`, `surname`, `email`, `password`, `data`, `gender`,  `age` , `address`, `city`, `image`) VALUES ('$name', '$surname', '$email', '$password_hash', '$data','$gender','$age','$address', '$city', '$folder') ");
        move_uploaded_file($tempname, $path . $folder);
    }
}







