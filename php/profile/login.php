<?php
session_start();

require_once '../database/database.php';
global $db_connect;

$login = $_POST["email"];
$password = $_POST["password"];
require_once '../validation/login_validation.php';

$db_person = $db_connect->query("SELECT * FROM `users` WHERE `email`='$login'")->fetch_assoc();
$isLogin = false;

$selectId = '';
$selectName = '';
if ($db_person['email'] == $login && password_verify($password, $db_person['password'])) {
    $selectId = $db_person['id'];
    $selectName = $db_person['name'];
    $_SESSION['id'] = $selectId;
    $_SESSION['name'] = $selectName;
    $_SESSION['login'] = true;
}

$db_users = $db_connect->query("SELECT * FROM `users` WHERE `id`= ? ")->fetch_assoc();
foreach ($db_users as $db_user) {
    if ($db_user['email'] == $login && $db_user['password'] == $password ) {
       $_SESSION['id'] = $db_user['id'];
    }
}


if ($_SESSION['id'] === $selectId) {
    header("Location: /profile");
} else {
    header("Location: /404");
}