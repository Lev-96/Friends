<?php

use App\Services\Page;

session_start();

if (isset($_SESSION['id'])) {
    header('Location:  /profile');
}
?>
<!doctype html>
<html lang="en">
<?php
Page::part('head');
//?>
<body>
<div id="login-form">
    <div class="container">
        <div class="logo">
            <a href="login"><h1 class="animate__animated animate__backInDown">Friends</h1></a>
            <p class="animate__animated animate__backInDown">Connect with friends and the world around you on
                Friends.</p>
        </div>
        <form action="./php/profile/login.php" method="POST" class="animate__animated animate__backInDown">
            <input type="text" placeholder="Your user email..." required name="email">
            <input type="password" placeholder="Your user password..." required name="password">
            <a href="" class="btn">
                <button type="submit" class="sign">Log In</button>
            </a>
            <a href="reset" class="pass">Forgot password?</a>
            <a href="register" class="signin">
                <button type="button" class="btns" name="login_users">Create new account</button>
            </a>
            <?php if (isset($_SESSION['error'])) { ?>
                <p class="error">
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </p>
                <?php
            } elseif (isset($_SESSION['success'])){ ?>
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
</div>
</body>
<?php
Page::part('footer');
//?>
</html>