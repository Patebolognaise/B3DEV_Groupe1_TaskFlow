<?php 

$action = $_GET['action'] ?? 'show';
// Modeles
require_once("models/user.php");

switch($action){

    case 'show':
        $Users= User::GetAllUsers();
        include("views/user/user.php");

    break;

    case 'AddUser':
        $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
        $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $motdepasse = $_POST['motdepasse'];
        $telephone = $_POST['telephone'];
        User::AddUser($nom, $prenom, $email, $motdepasse, $telephone);

        $data["user"] = User::GetAllUsers();

        include("views/user/user.php");
        break;
    case "edit":
            $id = $_GET['id'];
            $user = User::GetUserById($id);
            include("views/user/edit.php");
            break;

    case "update":
        $id = $_POST['id_user'];
        $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
        $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $motdepasse = $_POST['motdepasse'];
        $telephone = $_POST['telephone'];
        User::UpdateUser($id, $nom, $prenom, $email, $motdepasse, $telephone);
        $data["user"] = User::GetAllUsers();

        header("Location: ?controller=user&action=show");
        exit;
        break;
    case "delete":
        $id = $_GET['id'];
        User::DeleteUser($id);
        $data["user"] = User::GetAllUsers();
        header("Location: ?controller=user&action=show");
        exit;
        break;
    default:
        include "views/404.php";
        break;
}