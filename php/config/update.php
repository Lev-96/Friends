<?php
require_once 'php/database/database.php';
global $db_connect;

$id = $_POST["id"];
$name = $_POST["name"];
$desc = $_POST["desc"];
$embed = $_POST["embed"];
$tag = $_POST["tag"];

$tags = $db_connect->query("SELECT * FROM tags WHERE `tag_name` = '$tag'")->fetch_all(1);
if (count($tags) == 0) {
    $db_connect->query("INSERT INTO `tags` (`tag_name`) VALUES ('$tag')");
    $tags = $db_connect->query("SELECT * FROM tags WHERE `tag_name` = '$tag'")->fetch_all(1);
}
//echo '<pre>';print_r($tags["id"]);die();

$update = $db_connect->query("UPDATE `tube`  SET `name_input` = '$name', `description` = '$desc', `embed` = '$embed', `tag_id` = '" . $tags[0]['id'] . "' WHERE `id` = '$id'");

if (!$update) {
    echo 'Error connect update' . $db_connect->connect_error;
} else {
    echo 'Update success ok!';

    ?>
    <script>
        setTimeout(() => {
            window.location.replace("../profile");
        }, 2000)
    </script>
    <?php
}


