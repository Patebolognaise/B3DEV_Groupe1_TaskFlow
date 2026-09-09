<?php

require_once __DIR__ . '/../models/Task.php';
require_once __DIR__ . '/../models/Project.php';

$taskModel = new Task($pdo);
$projectModel = new Project($pdo);

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'create':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $success = $taskModel->create($_POST);

            if ($success) {
                header('Location: ?controller=task&action=index');
                exit;
            }

            $errorMessage = 'La tâche n’a pas pu être créée.';
        }

        $projects = $projectModel->getAll();
        include __DIR__ . '/../views/tasks/create.php';
        break;

    case 'index':
    default:
        $tasks = $taskModel->getAll();
        include __DIR__ . '/../views/tasks/index.php';
        break;
}
