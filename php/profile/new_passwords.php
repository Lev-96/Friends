<?php
require_once '../database/database.php';
global $db_connect;

$email = $_POST["email"];
$reset_token = $_POST["reset_token"];
$new_password = $_POST["new_pass"];

$results = $db_connect->query("SELECT * FROM users WHERE email = '$email'")->fetch_object();
if (mysqli_num_rows($results) > 0) {
    if ($results->reset_token == $reset_token) {
        $result = $db_connect->query("UPDATE users SET password='$new_password' WHERE email='$email' AND reset_password='$reset_token'");

        echo "Password has been changed";
    } else {
        echo "Recovery Email has been expired";
    }
} else {
    echo "Email does not exists";
}
