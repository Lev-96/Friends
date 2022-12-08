<!doctype html>
<html lang="en">
<?php

use App\Services\Page;

session_start();
if (!isset($_SESSION['id'])) {
    header('Location:  /login');
}

Page::part('head_profile');

Page::part('profile');

Page::part('footer');
?>
</html>