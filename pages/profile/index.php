<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
if (strpos($root, 'htdocs') !== false) {
    $root = $root . '\cc_admin';
}
require_once "$root/app/config/config.php";
require_once "$root/app/config/Database.php";

$DB = new Database();

if (isset($_POST["update_record"])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];

    $query = "UPDATE user set nama=:nama, username=:username, gender=:gender WHERE username=:usname";
    $DB->query($query);
    $DB->bind('usname', $_SESSION['uname']);
    $DB->bind('nama', $nama);
    $DB->bind('username', $username);
    $DB->bind('gender', $gender);
    $DB->execute();
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
    <link rel="stylesheet" href="./assets/css/profile.css">
    <title>Profile</title>
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

                <div class="profile-container">
                    <form>
                        <h3>Nama</h3>
                        <input class="input-textbox" type="text" name="nama" placeholder="Name"><br>
                        <h3>Username</h3>
                        <input class="input-textbox" type="email" name="email" placeholder="Username"><br>
                        <h3>Gender</h3>
                        <input type="radio" name="gender" placeholder="Gender" value="l">Laki-laki
                        <input type="radio" name="gender" placeholder="Gender" value="p">Perempuan
                        <br>
                        <div class="btn-container">
                        <input class="btn-update" type="submit" name="update_record" value="Update">
                        </div>    
                    </form>
                </div>

    </main>
    <footer>
        <h2>Fashion Design</h3>
            <h4>Berlangganan untuk mendapatkan info dari kami</h4>
            <div class="subscription">
                <form action="#">
                    <input type="text" name="email" id="email" placeholder="Your Email" autocomplete="off" />
                    <input type="submit" value="Subscribe" />
                </form>
            </div>
            <p>&#169; 2021 Fashion Design Inc.</p>
    </footer>
    <script src="./assets/js/script.js"></script>
</body>

</html>