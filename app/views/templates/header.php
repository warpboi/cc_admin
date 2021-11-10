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

  <title>Base | Fashion Design</title>
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