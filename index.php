<?php
include 'config/database.php';

$controller = $_GET['controller'] ?? 'accueil';
$action = $_GET['action'] ?? 'show';

include 'views/layout/header.php';

require_once "controllers/" . $controller . "Controller.php";

include 'views/layout/footer.php';



?>