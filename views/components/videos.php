<?php
session_start();

use App\Users\Users;
use App\Users\Videos;

?>

<div id="body" class="animate__animated animate__backInDown">
    <nav class="nav">
        <ul class="nav-content">
            <li class="nav-list">
                <a href="./profile.php" class="link-item active">
                    <img class="friends" src="././images/Favicon/friends.jpg" alt="friends">
                </a>
            </li>
            <li class="nav-list">
                <a href="#" class="link-item">
                    <i class='bx bxs-message-rounded-dots link-icon'></i>
                    <span class="link-text">Messages</span>
                </a>
            </li>
            <li class="nav-list">
                <a href="#" class="link-item">
                    <i class='bx bxs-conversation link-icon'></i>
                    <span class="link-text">Discussions</span>
                </a>
            </li>
            <li class="nav-list">
                <a href="#" class="link-item">
                    <i class='bx bxs-bell link-icon'></i>
                    <span class="link-text">Alert</span>
                </a>
            </li>
            <li class="nav-list">
                <a href="#" class="link-item">
                    <i class='bx bxs-user-badge link-icon'></i>
                    <span class="link-text">Friends</span>
                </a>
            </li>
            <li class="nav-list">
                <a href="#" class="link-item">
                    <i class='bx bxs-calendar-event link-icon'></i>
                    <span class="link-text">Event</span>
                </a>
            </li>
            <li class="nav-list">
                <a href="videos" class="link-item">
                    <i class='bx bxs-videos link-icon'></i>
                    <span class="link-text">Video</span>
                </a>
            </li>
            <li class="nav-list">
                <a href="#" class="link-item">
                    <i class='bx bxl-deezer link-icon'></i>
                    <span class="link-text">Music</span>
                </a>
            </li>
            <li class="nav-list">
                <a href="#" class="link-item">
                    <i class='bx bxs-cog link-icon'></i>
                    <span class="link-text">Settings</span>
                </a>
            </li>
            <li class="nav-list">
                <a href="php/profile/logout.php" class="link-item">
                    <i class='bx bxs-exit link-icon'></i>
                    <span class="link-text">Logout</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- *********************************** Profile ********************   -->

    <div class="content">
        <div class="profile">
            <div class="container">
                <div class="images">
                    <div class="user">
                        <img class="user_img" src="././images/img/<?= Users::auth()->image ?>" alt="images"
                             title="images">
                    </div>
                    <div class="informacion">
                        <h1 class="name"><?= Users::auth()->name ?><span
                                    class="surname"><?= Users::auth()->surname ?></span></h1>
                        <p class="age">Age:<?= Users::auth()->age ?></p>
                        <p>Date: <?= Users::auth()->data ?></p>
                        <p>Address: "<?= Users::auth()->address ?>"</p>
                        <p>City: "<?= Users::auth()->city ?>"</p>
                        <p>Email: "<?= Users::auth()->email ?>"</p>
                    </div>
                </div>
            </div>
        </div>

        <!--************************************************* Videos ******************************************-->
        <div class="video_content">
            <div class="form_design">
                <form action="../../php/profile/videos.php" method="post" enctype="multipart/form-data"
                      class="form_content">
                    <input type="text" placeholder="Your name" name="name">
                    <input type="text" placeholder="Your description" name="description">
                    <input type="text" placeholder="Your embed code" name="embed">
                    <button type="submit" class="btn">Add Videos</button>
                    <?php if (isset($_SESSION['error'])) { ?>
                        <p class="error">
                            <?php
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                            ?>
                        </p>
                        <?php
                    } elseif (isset($_SESSION['success'])) { ?>
                        <p class="success">
                            <?php
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                            ?>
                        </p>
                        <?php
                    }
                    ?>
                </form>
            </div>
            <div class="flex_videos">
                <?php
                $data = json_decode(file_get_contents("php://input"));
                $link_delete = $data->btn;
                if (Videos::usersVideos()) {
                    $results = Videos::usersVideos();
                    foreach ($results as $result) {
                        ?>
                        <div class="videos">
                            <div class="video_container">
                                <iframe class="video" id="player" width="250" height="250"
                                        src="<?= $result['embed'] ?>"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen>
                                </iframe>
                                <h1 class="name">Name: <?= $result['name_input'] ?></h1>
                                <p class="embed">User: <?= $result['user_id'] ?></p>
                                <p class="description">Description: <?= $result['description'] ?></p>
                                <a href="#" class="absalute_close" id="link_btn" >
                                    <span class="close">X</span>
                                </a>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>