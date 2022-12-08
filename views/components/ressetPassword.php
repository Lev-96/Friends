<!--********************** User Log In ***************************-->

<div class="logins">
    <a href="login"><h1 class="animate__animated animate__backInDown">Friends</h1></a>
    <form class="animate__animated animate__backInDown" action="php/profile/login.php" method="POST">
        <input type="text" placeholder="Your user email or phone" required name="email">
        <input type="password" placeholder="Your user password" required name="password">
        <a href="#" class="btn">
            <button type="submit" class="sign">Sign in</button>
        </a>
        <a href="#" class="pass">Forgot your password?</a>
    </form>
</div>

<!-- ******************** User Log In / ******************************   -->


<!-- ******************** User Reset Password **********************   -->

<div class="passReset">
    <div class="container">
        <form action="php/email/sendMail.php" method="POST">
            <h2>Find your account</h2>
            <p>Please enter your email. address or search for your account.</p>
            <input type="text" placeholder="Your user email..." required name="email">
            <div class="groupBtn">
                <a href="new_password">
                    <button type="submit" class="searchBtn">Next</button>
                </a>
                <button type="submit" class="cancelBtn">Cancel</button>
            </div>
        </form>
    </div>
</div>

<!-- ******************** User Reset Password / **********************   -->



























