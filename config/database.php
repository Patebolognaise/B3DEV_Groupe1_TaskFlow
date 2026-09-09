<?php 
// Connexion à la bdd 

$localhost = "mysql-melain.alwaysdata.net";
$db = "melain_taskflow";
$user = "melain_taskflow";
$password = "TaskFlow123.";

try{
$pdo = new PDO("mysql:host=$localhost;dbname=$db", $user, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Je suis connecté à la bdd";
}catch(PDOException $e){
    echo "Erreur de connexion à la base de données" . $e->getMessage();
}
?>