<?php
session_start();
?>
<div class="logins">
    <a href="login"><h1 class="animate__animated animate__backInDown">Friends</h1></a>
    <form class="animate__animated animate__backInDown" action="php/profile/login.php" method="POST">
        <input type="text" placeholder="Your user email or phone" required name="email">
        <input type="password" placeholder="Your user password" required name="password">
        <a href="#" class="btn">
            <button type="submit" class="sign">Sign in</button>
        </a>
        <a href="reset" class="pass">Forgot your password?</a>
    </form>
</div>
<div class="registracion-form">
    <div class="container">
        <h1 class="animate__animated animate__backInDown">Register Form</h1>
        <form class="animate__animated animate__backInDown" action="php/profile/register.php" method="POST" enctype="multipart/form-data">
            <label for="lastName">
                <input type="text" placeholder="Name" id="lastName" name="name" required>
            </label>
            <label for="surname">
                <input type="text" placeholder="Surname" id="surname" name="surname" required>
            </label>
            <label for="age">
                <input type="number" id="age" name="age" placeholder="Your user age...">
            </label>
            <label for="address">
                <input type="text" id="address" name="address" placeholder="Your user address...">
            </label>
            <label for="city">
                <input type="text" id="city" name="city" placeholder="Your user city...">
            </label>
            <label for="email">
                <input type="email" id="email" name="email" placeholder="Your user email...">
            </label>
            <label for="password">
                <input type="password" id="password" name="password" placeholder="New Password">
            </label>
            <label for="data">
                <input type="date" name="data" id="data" required>
            </label>
            <div class="labels">
                <label for="user1">Female
                    <input type="radio" name="gender" id="user1" value="Female">
                </label>
                <label for="user2">Male
                    <input type="radio" name="gender" id="user2" value="Male">
                </label>
            </div>

            <div class="container mt-5">
                <div class="row text-center">
                    <div class="col-12 col-sm-12 offset-md-4 col-md-4 offset-lg-4 col-lg-4">
                        <img src="https://www.gumtree.com/static/1/resources/assets/rwd/images/orphans/a37b37d99e7cef805f354d47.noimage_thumbnail.png"
                             class="img-fluid custom-image" alt="" id="image">
                        <span class="input-container">
                        <label for="upload" id="uploadsed">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-camera fa-stack-1x fa-inverse"></i>
                          </span>
                        </label>
                      </span>
                        <input type="file" name="avatar" id="upload" class="custom-input" required>
                    </div>
                </div>
            </div>

            <button type="submit" name="send">Register</button>

            <p>&#9888; By clicking the Register button, you accept the Terms, Data Usage Policy and Cookie Policy. You
                may receive SMS notifications from us that you may unsubscribe at any time.</p>
        </form>
        <a href="login" class="home">&#127968; Return to home page</a>
    </div>
</div>
