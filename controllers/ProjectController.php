<?php

require_once __DIR__ . '/../models/Project.php';
require_once __DIR__ . '/../models/Task.php';

$projectModel = new Project($pdo);
$taskModel = new Task($pdo);

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'create':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $success = $projectModel->create($_POST);

            if ($success) {
                header('Location: ?controller=project&action=index');
                exit;
            }

            $errorMessage = 'Le projet n’a pas pu être créé.';
        }

        include __DIR__ . '/../views/projects/create.php';
        break;

    case 'show':
        $projectId = (int) ($_GET['id'] ?? 0);
        $project = $projectId > 0 ? $projectModel->findById($projectId) : null;
        $tasks = $projectId > 0 ? $taskModel->getByProjectId($projectId) : [];

        include __DIR__ . '/../views/projects/show.php';
        break;

    case 'index':
    default:
        $projects = $projectModel->getAll();
        include __DIR__ . '/../views/projects/index.php';
        break;
}