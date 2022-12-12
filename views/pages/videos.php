<!doctype html>
<html lang="en">
<body>
<?php
use App\Services\Page;
session_start();

if (!isset($_SESSION['id'])) {
    header('Location:  /login');
}
Page::part('head_videos');

Page::part('videos');

Page::part('footer');
?>
</body>
</html>