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
                header('Location: ?controller=Projet&action=index');
                exit;
            }

            $errorMessage = 'La tâche n’a pas pu être créée.';
        }

        $projects = $projectModel->getAll();
        include __DIR__ . '/../views/tasks/create.php';
        break;

    case 'index':

    case 'edit':
        $id = $_GET['id'];
        $task = Task::GetTaskById($id);
        include __DIR__ . '/../views/tasks/edit.php';
        break;

        case 'update':
            $id = filter_input(INPUT_POST, 'id_tache', FILTER_SANITIZE_NUMBER_INT);
            $titre = filter_input(INPUT_POST, 'titre_tache', FILTER_SANITIZE_STRING);
            $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
            $priorite = filter_input(INPUT_POST, 'priorite', FILTER_SANITIZE_STRING);
            $statut = filter_input(INPUT_POST, 'statut_tache', FILTER_SANITIZE_STRING);
            $deadline = filter_input(INPUT_POST, 'deadline', FILTER_SANITIZE_STRING);
            $id_projet = $_POST['id_projet'];
            Task::UpdateTask($id, $titre, $description, $priorite, $statut, $deadline, $id_projet);
            header('Location: ?controller=Projet&action=index');
            exit;
            break;
        case 'delete':
            $id = $_GET['id'];
            Task::DeleteTask($id);
            header('Location: ?controller=Projet&action=index');
            exit;
            break;
    default:
        $tasks = $taskModel->getAll();
        include __DIR__ . '/../views/tasks/index.php';
        break;
}
