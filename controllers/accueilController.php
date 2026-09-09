<?php 


$action = $_GET['action'] ?? 'show';


switch($action){
    case 'show':
        include "views/accueil.php";
        break;
    default:
        include "views/404.php";
        break;
}