<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
if (strpos($root, 'htdocs') !== false) {
    $root = $root . '\cc_admin';
}
require_once "$root/app/config/config.php";
require_once "$root/app/config/Database.php";

$DB = new Database();

if (count($_POST) > 0) {
    $query = "SELECT * FROM  user WHERE username= :usname ";
    $DB->query($query);
    $DB->bind('usname', $_SESSION['uname']);
    $result = $DB->single();
    $row=$result;

    if ($_POST["currentPassword"] == $row["password"]) {
        $query = "UPDATE user set password =:password WHERE id_user=:usname";
        $DB->query($query);
        $DB->bind('usname', $row['id_user']);
        $DB->bind('password',  $_POST["newPassword"]);
        $DB->execute();
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sacramento:400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Satisfy:400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500">
    <link rel="stylesheet" href="./assets/css/changepassword.css">
    <link rel="stylesheet" href="./assets/css/sidebar.css">
    <title>Change Password | Fashion Design</title>
    <script>
        function validatePassword() {
            var currentPassword, newPassword, confirmPassword, output = true;

            currentPassword = document.frmChange.currentPassword;
            newPassword = document.frmChange.newPassword;
            confirmPassword = document.frmChange.confirmPassword;

            if (!currentPassword.value) {
                currentPassword.focus();
                document.getElementById("currentPassword").innerHTML = "required";
                output = false;
            } else if (!newPassword.value) {
                newPassword.focus();
                document.getElementById("newPassword").innerHTML = "required";
                output = false;
            } else if (!confirmPassword.value) {
                confirmPassword.focus();
                document.getElementById("confirmPassword").innerHTML = "required";
                output = false;
            }
            if (newPassword.value != confirmPassword.value) {
                newPassword.value = "";
                confirmPassword.value = "";
                newPassword.focus();
                document.getElementById("confirmPassword").innerHTML = "not same";
                output = false;
            }
            return output;
        }
    </script>
</head>

<body>
    <header>
        <nav class="nav container">
            <div class="logo">
                <img src="./assets/img/logo.png" width="90">
                <p>Fashion Design</p>
            </div>
            <ul class="menu-container">
                <li class="nav-item">
                    <a href="../" class="nav-link">
                        <span data-hover="Home" class="navi-text">
                            Home
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../about.html" class="nav-link">
                        <span data-hover="Innovations" class="navi-text">
                            About Us
                        </span>
                    </a>
                </li>
                <li class="nav-item" id="dropdown">
                    <a class="nav-link btn">
                        <span data-hover="Innovations" class="navi-text">
                            My Account
                        </span>
                    </a>
                    <div class="dropdown-child">
                        <a href=# class="btn">Profiles</a>
                        <a href="#" class="btn">Sign Out</a>
                    </div>
                </li>
            </ul>
            <div class="menu_burger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <main>
        <div class="mid">
            <div class="hello-there">
                Change Password
            </div>
            <div class="welcome">
                Enter Your Account
            </div>
            <div class="message" style="color:red;"><?php if(isset($message)) { echo $message; } ?></div>
            <form name="frmChange" method="post" action="" onSubmit="return validatePassword()" class="form">   
            <input class="input-form" id="currentPassword" type="password" name="currentPassword" placeholder="Password" style="height: 47px"/>
            <input class="input-form" id="newPassword" type="password" name="newPassword" placeholder="New Password" style="height: 47px"/>
            <input class="input-form" id="confirmPassword" type="password" name="confirmPassword" placeholder="Confirm Password" style="height: 47px"/>
            <p><input type="submit" name="submit" value="Change Password" class="btn2"></input></p>
            <p><a href="../" class="backtologin">Back to Home page</a></p>
             </div>
            </form> 
    </main>
    <script src="./assets/js/script.js"></script>
</body>

</html>
