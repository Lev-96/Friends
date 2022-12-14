<?php

use App\Users\Users;

?>
<!-- ************************** START LOADER **************************** -->
<div id="js-loader" class="loader">
    <h1 class="loading">Friends</h1>
    <img class="load_img" src="../../images/Favicon/friends.jpg" alt="image" title="friends">
</div>
<!-- ************************ END LOADER *******************************-->

<div id="body" class="animate__animated animate__backInDown">
    <nav class="nav">
        <ul class="nav-content">
            <li class="nav-list">
                <a href="./profile.php" class="link-item active">
                    <img class="friends" src="././images/Favicon/friends.jpg" alt="friends" title="Home">
                </a>
            </li>
            <li class="nav-list">
                <a href="#" class="link-item" title="Messages">
                    <i class='bx bxs-message-rounded-dots link-icon'></i>
                    <span class="link-text">Messages</span>
                </a>
            </li>
            <li class="nav-list">
                <a href="#" class="link-item" title="Discussions">
                    <i class='bx bxs-conversation link-icon'></i>
                    <span class="link-text">Discussions</span>
                </a>
            </li>
            <li class="nav-list">
                <a href="#" class="link-item" title="Alert">
                    <i class='bx bxs-bell link-icon'></i>
                    <span class="link-text">Alert</span>
                </a>
            </li>
            <li class="nav-list">
                <a href="#" class="link-item" title="Friends">
                    <i class='bx bxs-user-badge link-icon'></i>
                    <span class="link-text">Friends</span>
                </a>
            </li>
            <li class="nav-list">
                <a href="#" class="link-item" title="Event">
                    <i class='bx bxs-calendar-event link-icon'></i>
                    <span class="link-text">Event</span>
                </a>
            </li>
            <li class="nav-list">
                <a href="videos" class="link-item" title="Video">
                    <i class='bx bxs-videos link-icon'></i>
                    <span class="link-text">Video</span>
                </a>
            </li>
            <li class="nav-list">
                <a href="#" class="link-item" title="Music">
                    <i class='bx bxl-deezer link-icon'></i>
                    <span class="link-text">Music</span>
                </a>
            </li>
            <li class="nav-list">
                <a href="#" class="link-item" title="Settings">
                    <i class='bx bxs-cog link-icon'></i>
                    <span class="link-text">Settings</span>
                </a>
            </li>
            <li class="nav-list">
                <a href="php/profile/logout.php" class="link-item" title="Logout">
                    <i class='bx bxs-exit link-icon'></i>
                    <span class="link-text">Logout</span>
                </a>
            </li>
        </ul>
    </nav>


    <!-- *********************************** Profile ********************   -->

    <div class="profile">
        <div class="container">
            <div class="images">
                <div class="user">
                    <img class="user_img" src="././images/img/<?= Users::auth()->image ?>" alt="images"
                         title="<?= Users::auth()->name ?>">
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

</div>
