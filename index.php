<?php
include __DIR__ . '/config/database.php';

$controller = strtolower($_GET['controller'] ?? 'accueil');
$action = $_GET['action'] ?? 'show';

$controllerFile = null;
$controllerCandidates = [
    $controller . 'Controller.php',
    ucfirst($controller) . 'Controller.php'
];

foreach ($controllerCandidates as $candidate) {
    $path = __DIR__ . '/controllers/' . $candidate;
    if (file_exists($path)) {
        $controllerFile = $path;
        break;
    }
}

include __DIR__ . '/views/layout/header.php';

if ($controllerFile) {
    require_once $controllerFile;
} else {
    include __DIR__ . '/views/accueil.php';
}

include __DIR__ . '/views/layout/footer.php';



?>