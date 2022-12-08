<?php
//session_start();
//require_once 'database.php';
//global $db_connect;
//
//
//$errors = [];
//$user_id = "";
//
//if (isset($_POST['login_users'])) {
//    $user_id = mysqli_real_escape_string($db_connect, $_POST['email']);
//    $password = mysqli_real_escape_string($db_connect, $_POST['password']);
//
//    if (empty($user_id)) array_push($errors, "User Email is Required");
//    if (empty($password)) array_push($errors,'User Password is Required');
//
//    if (count($errors) == 0) {
//        $password = md5($password);
//        $results =$db_connect->query("SELECT * FROM users WHERE `name` = '$user_id' OR `email` = '$user_id' AND `password` = '$password'");
//
//    if (mysqli_num_rows($results) == 1) {
//        $_SESSION['name'] = $user_id;
//        $_SESSION['success'] = "You are now logged in";
//        header("Location: new_password_page");
//    }else {
//        array_push($errors, "Error, page not found!");
//     }
//   }
//}
//
//
//if (isset($_POST['reset_password'])) {
//    $email = mysqli_real_escape_string($db_connect,$_POST['email']);
//    $result = $db_connect->query("SELECT `email` FROM users WHERE `email` = '$email'");
//if (empty($email)) {
//    array_push($errors, "Your emails is required");
//}elseif (mysqli_num_rows($result) <= 0) {
//    array_push($errors, "Error pushed email address!");
//}
//$token = bin2hex(random_bytes(50));
//
//if (count($errors) == 0) {
//    $res = $db_connect->query("INSERT INTO `users` (`email`, `reset_password`) VALUES ('$email', '$token')");
//
//    $to = $email;
//    $subject = "Reset your password on Friends.am";
//    $msg = wordwrap($msg, 70);
//    $headers = "From: Friends";
//    mail($to, $subject, $msg, $headers);
//    header('Location: pending.php?email='.$email);
//    }
//}
//
//if (isset($_POST['new_password'])) {
//    $new_pass = mysqli_real_escape_string($db_connect, $_POST['new_pass']);
//    $new_pass_c = mysqli_real_escape_string($db_connect,$_POST['new_pass_c']);
//
//    $token = $_SESSION['token'];
//    if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "password is required");
//    if ($new_pass !== $new_pass_c) array_push($errors, "Password not found!");
//    if (count($errors) == 0) {
//        $resultes = $db_connect->query("SELECT `email` FROM `users` WHERE `reset_password` = '$token' LIMIT 1");
//        $email = mysqli_fetch_assoc($resultes)['email'];
//
//    if ($email) {
//        $new_pass = md5($new_pass);
//        $resultess = $db_connect->query("UPDATE `users` SET  `password` = '$new_pass' WHERE `email` = '$email'");
//        header("Location: profile");
//
//        }
//    }
//}

require_once '../database/database.php';
global $db_connect;

$email = $_GET["email"];
$reset_token = $_GET["reset_token"];

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($db_connect, $sql);
if (mysqli_num_rows($result) > 0) {
    echo 'Success ok!';
} else {
    echo "Email does not exists";
}

$user = mysqli_fetch_object($result);
if ($user->reset_token == $reset_token) {
    echo 'Success ok!';
} else {
    echo "Recovery email has been expired";
}

if ($user->reset_token == $reset_token) {
    ?>
    <form action="new_passwords.php" method="POST">
        <h1>New Password</h1>
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="reset_token" value="<?php echo $reset_token; ?>">
        <input type="password" placeholder="New password" name="new_pass">
        <button type="submit" name="new_password">Change password</button>
    </form>
    <?php
} else {
    echo "Recovery email has been expired";
}
