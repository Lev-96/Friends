<?php

use App\Services\Page;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
</head>
<body style="background-image: none;  background-color: rgba(255, 136, 0, 0.103);">
<?php
Page::part('new_pass');
?>
</body>
<?php
Page::part('footer');
//?>
</html>