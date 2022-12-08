<?php

$db_connect = mysqli_connect('localhost', 'root', '', 'friends');
if (!$db_connect) {
    die('Error connect' . $db_connect->connect_error . "Error numbers" . $db_connect->connect_errno);
}