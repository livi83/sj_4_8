<?php
require_once('_inc/autoload.php');

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
          <!--
            <li><a href="index.php">Domov</a></li>
            <li><a href="portfolio.php">Portfólio</a></li>
            <li><a href="qna.php">Q&A</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
        -->
         
        </ul>
        <a class="hamburger" id="hamburger">
            <i class="fa fa-bars"></i>
        </a>
      </nav>
    </header>
    <?php
    
    /*$db = new Database();
    $conn = $db->getConnection();
    if($conn){
      echo 'Máme spojenie<br>';
      var_dump($conn);
    }*/

    /*$db = new Database();
    $contact = new Contact($db);
    $contacts = $contact->index();
    var_dump($contacts);*/
    ?>
   