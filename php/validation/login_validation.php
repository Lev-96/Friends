<?php

include_once '../profile/login.php';
global $login;
global $password;


/************************** Login Validacion Email ****************************************/

if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $login)) {
    $_SESSION['success'] = 'Email Success Ok!';
    header("Location: login");

} else {
    $_SESSION['error'] = 'Invalid Email!';
    header("Location: register");
    die();
}

/************************** Login Validacion Email / ****************************************/


/************************** Login Validacion Password ****************************************/

$lowerCase = preg_match('@[a-z]@', $password);
$upperCase = preg_match('@[A-Z]@', $password);
$number = preg_match('@[0-9]@', $password);
$charSymbols = preg_match('@[^/w.]@', $password);


if (!$lowerCase || !$upperCase || !$number || !$charSymbols || strlen($password) < 8) {
    $_SESSION['error'] = 'Invalid password :(!';
    header("Location: register");
    die();
} else {
    $_SESSION['success'] = 'Password Success Ok!';
    header("Location: login");
}

/************************** Login Validacion Password / ****************************************/
