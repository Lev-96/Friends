<?php

include_once '../profile/register.php';
global $email;
global $password;

/************************** Register Validacion Email ****************************************/

if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email)) {
    header("Location: login");

} else {
    $_SESSION['error'] = 'Invalid Email!';
    header("Location: register");
    die();
}
/************************** Register Validacion Email / ****************************************/

/************************** Register Validacion Password ****************************************/

$lowerCase = preg_match('@[a-z]@', $password);
$upperCase = preg_match('@[A-Z]@', $password);
$number = preg_match('@[0-9]@', $password);
$charSymbols = preg_match('@[^/w.]@', $password);


if (!$lowerCase || !$upperCase || !$number || !$charSymbols || strlen($password) < 8) {
    $_SESSION['error'] = 'Invalid password :(!';
    header("Location: register");
    die();
} else {
    header("Location: login");
}

/************************** Register Validacion Password / ****************************************/
