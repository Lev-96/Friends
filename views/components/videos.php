<?php
    use App\Users\Users;
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
<!--************************************************* Videos ******************************************-->

    <div class="videos">
        <div class="container">
            <iframe class="video" id="player" width="300" height="300"  src="--><?=Users::videos()?><!--"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>