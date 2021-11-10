<?php
include "koneksi.php";

function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    
    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: home.php');
        }else{
            // echo "Invalid username and password";
            function_alert("Invalid username and password");
        }

    }

}
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sacramento:400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Satisfy:400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400">
    
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/login.css">

    <title>Login</title>
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
                    <a href="#" class="nav-link">
                        <span data-hover="Home" class="navi-text">
                            Home
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">
                        <span data-hover="Innovations" class="navi-text">
                            About Us
                        </span>
                    </a>
                </li>
                    <a class="nav-login btn" href="#">
                        <span data-hover="Innovations" class="navi-text">
                            Login
                        </span>
                    </a>
                </li>
                <li>
                    <a class="nav-signup btn" href="#">
                        <span data-hover="Innovations" class="navi-text">
                            Sign Up
                        </span>
                    </a>
                </li>
            </ul>    
        </nav>
    </header>

    <div class="main-container">
        <div class="login-container">
            <div class="hello-there">
                Hello there
            </div>
            <div class="welcome">
                Welcome to your dashboard
                <form action="" method="post">
                <input type="text" id="txt_uname" name="txt_uname" class="input-form" placeholder="Username">
                <input type="password" id="txt_pwd" name="txt_pwd" class="input-form" placeholder="Password">
            </div>
                    
            <table class="form-table">
                <tr>
                    <td class="form-signup"><a href="#" style="padding-right:20px;">SignUp</a></td>
                    <td class="form-login"><input type="submit" name="but_submit" id="but_submit" value="Log In" style="width:80px; height:30px;
                    font-family:Roboto; font-size:16px; margin-right:20px;" /></td>
                </tr>    
            </table>

                </form>
            <div class="change-password">
                <a href="#">Change Password!</a>
            </div>
        </div>
        
    </div>
        
</body>
</html>