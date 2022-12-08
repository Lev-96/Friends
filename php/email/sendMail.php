<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer/src/Exception.php";
require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";
require_once 'php/database/database.php';
global $db_connect;


$email = $_POST["email"];

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($db_connect, $sql);
if (mysqli_num_rows($result) > 0) {
    $reset_token = time() . md5($email);
} else {
    echo "Email does not exists";
    die();
}

$sql = "UPDATE `users` SET reset_password='$reset_token' WHERE email='$email'";
mysqli_query($db_connect, $sql);

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$token = generateRandomString(32);


$message = "<p>Please click the link below to reset your password</p>";
$message .= "<a href='http://localhost/OOP_PERSON/new_password?token=$token'>";
$message .= "Reset password";
$message .= "</a>";

//echo $message; die;


function send_mail($to, $subject, $message)
{
    $mail = new PHPMailer(true);
    try {

        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'levonbakunts3@gmail.com';
        $mail->Password = 'mgls nccd usnn ggtn';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('info@friends.am', 'Friends.am');
        $mail->addAddress($to, "Friends mail");

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


send_mail($email, "Reset Password", $message);


