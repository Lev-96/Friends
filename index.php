<?php
require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/routes/routes.php";


if (!header("location: /login")) {
    header("location: /login");
} else {
    header("Location: /404");
}