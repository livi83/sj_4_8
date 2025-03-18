<?php

function get_menu(array $pages){
    $menuItems = ''; 
    foreach($pages as $page_name => $page_url){
        // Pre každú stránku pridá odkaz do navigačného menu
        $menuItems .= '<li><a href="' . $page_url . '">' . $page_name . '</a></li>';
    }
    // Vráti vygenerovaný HTML kód pre navigačné menu
    return $menuItems;
}

function add_scripts(){
    echo '<script src="js/menu.js"></script>';
    $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
    switch($page_name){
        case 'index':
            echo('<script src="js/slider.js"></script>');
            break;
        case 'qna':
            echo('<script src="js/accordion.js"></script>');
            break;  
        }
}

function add_stylesheets(){
    echo '<link rel="stylesheet" href="css/style.css">';
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
    $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
    switch($page_name){
        case 'index':
            echo '<link rel="stylesheet" href="css/slider.css">';
            break;
        case 'portfolio':
            echo '<link rel="stylesheet" href="css/portfolio.css">';
            echo '<link rel="stylesheet" href="css/banner.css">';
            break;
        case 'kontakt':
            echo '<link rel="stylesheet" href="css/banner.css">';
            echo '<link rel="stylesheet" href="css/form.css">';
            break;
        case 'qna':
            echo '<link rel="stylesheet" href="css/accordion.css">';
            echo '<link rel="stylesheet" href="css/banner.css">';
            break;
    }
}

?>