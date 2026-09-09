<?php
require_once("config/database.php");

class User{

    public static function GetAllUsers(){
        global $pdo;
        $stmt = $pdo->prepare("SELECT id_user, nom, prenom, email, tel FROM Users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function AddUser($nom, $prenom, $email, $motdepasse,$telephone){
        global $pdo;

        $stmt = $pdo->prepare("INSERT INTO Users (nom, prenom, email, password, tel) VALUES (:nom, :prenom, :email, :motdepasse, :telephone)");
        $stmt->execute(['nom' => $nom, 'prenom' => $prenom, 'email' => $email, 'motdepasse' => $motdepasse, 'telephone' => $telephone]);

        header("Location: index.php");        

    }
    

   
}