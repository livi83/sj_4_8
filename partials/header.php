<?php
require_once('_inc/autoload.php');
session_start();
$db = new Database();
$auth = new Authenticate($db);

print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja stránka</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/accordion.css">
    <link rel="stylesheet" href="assets/css/banner.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="stylesheet" href="assets/css/portfolio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/assets/css/font-awesome.min.css">
</head>
<body>
    <header class="container main-header">
        <div>
          <a href="index.php">
            <img src="assets/img/logo.png" height="40">
          </a>
        </div>
      <nav class="main-nav">
        <ul class="main-menu" id="main-menu">
          <?php
            $menu = new Menu();
            $menuItems = $menu->index();
            foreach ($menuItems as $item) {
              echo '<li><a href="' . $item['link'] . '">' . $item['label'] . '</a></li>';
            }
          ?>
          <?php if ($auth->isLoggedIn()): ?>
            <li><a href="logout.php">Odhlásiť sa</a></li>
          <?php endif; ?>
        </ul>
        <a class="hamburger" id="hamburger">
            <i class="fa fa-bars"></i>
        </a>
      </nav>
    </header>
    