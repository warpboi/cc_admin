<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
if (strpos($root, 'htdocs') !== false) {
  $root = $root . '\cc_admin';
}
require_once "$root/app/config/config.php";


// logout
if (isset($_POST['but_logout'])) {
  session_destroy();
  header('Location: index.php');
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

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url; ?>/dist/css/main.css">
  <?php

  if (isset($data['css'])) {
    foreach ($data['css'] as $e => $i) {
  ?>
      <link rel="stylesheet" href="<?= base_url; ?>/dist/css/<?= $i; ?>.css">
  <?php
    }
  }
  ?>
  <!-- <link rel="stylesheet" href="<?= base_url; ?>/dist/css/paduan-pakaian.css"> -->

  <title><?= $data['title'] ?> | Fashion Design</title>
</head>

<body>
  <header>
    <nav class="nav container">
      <div class="logo">
        <img src="<?= base_url; ?>/dist/img/logo.png" width="90">
        <p>Fashion Design</p>
      </div>
      <ul class="menu-container">
        <li class="nav-item">
          <a href="<?= base_url; ?>" class="nav-link">
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
        <?php
        if (!isset($_SESSION['uname'])) {
        ?>
          <li class="nav-item">
            <a href="<?= base_url ?>/login/" class="nav-link btn">
              <span data-hover="Innovations" class="navi-text">
                Login
              </span>
            </a>
          </li>
          <li>
            <a class="nav-link nav-signup btn" href="#">
              <span data-hover="Innovations" class="navi-text">
                Sign Up
              </span>
            </a>
          </li>
        <?php
        } else {
        ?>
          <li class="nav-item" id="dropdown">
            <a class="nav-link btn">
              <span data-hover="Innovations" class="navi-text">
                My Account
              </span>
            </a>
            <div class="dropdown-child">
              <a href=# class="btn">Profiles</a>
              <form method='post' action="">
                <input class="btn logout" type="submit" value="Logout" name="but_logout">
              </form>
            </div>
          </li>
        <?php
        }
        ?>
      </ul>
      <div class="menu_burger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>
  </header>
  <main>