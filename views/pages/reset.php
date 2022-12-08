<?php

use App\Services\Page;

?>
<!doctype html>
<html lang="en">
<?php
Page::part('head');
//?>
<body style="background-image: none;  background-color: rgba(255, 136, 0, 0.103);">
<?php
Page::part('ressetPassword');
?>
</body>
<?php
Page::part('footer');
//?>
</html>