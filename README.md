<<<<<<< HEAD
## TaskFlow (Gestion collaborative de tâche)
## Membre 
 -Timo William Melain 

## Technologie utilisée 
 *** Langauges utlisés"**

 - HTML 
 - CSS
 - javaScript
 - PHP
 - SQL 

 *** Logiciel et Outil :***
 - XAMPP 
 - MySQL
 - VS Code
 - git & github
 - looping

 # Procédure d'installation

 1. Cloner le dépôt Git ou créer un répertoire pour le projet `B3DEV_Groupe1_TaskFlow` dans le dossier de votre serveur local (ex: `htdocs` de XAMPP).
 2. Déposer l'ensemble des fichiers du projet dans le dossier du serveur web.
 3. Démarrer le serveur Apache et le serveur MySQL (via le panneau de contrôle XAMPP).

 # Procédure de lancement 

 1. Démarrer les services **Apache** et **MySQL** via XAMPP Control Panel.
 2. Ouvrir votre navigateur web.
 3. Accéder à l'application via l'URL : `http://localhost/Exercie_B3_DEV_RT/B3DEV_Groupe1_TaskFlow/` (ajuster le chemin selon votre dossier htdocs).

 # Configuration de la bdd

 1. Ouvrir votre gestionnaire de base de données (ex: **phpMyAdmin** sur `http://localhost/phpmyadmin`).
 2. Créer une nouvelle base de données MySQL.
 3. Importer le fichier `database/schema.sql` pour créer la structure des tables ( `User`, `Projet`, `Tache`, `Attribuer`).
 4. Configurer les accès dans le fichier `config/database.php`( selon votre serveur web de base de données )
 

 # Structure du projet 

```text
=======
TASKFLOW

développer par Timo, William et Melain

technologies utilisées:



```
>>>>>>> be7e45156f3adad524b9344b1753b965036fc442
B3DEV_Groupe1_TaskFlow/
├── config/
│   └── database.php         # Configuration et connexion PDO à la BDD
├── controllers/
│   ├── accueilController.php # Contrôleur de la page d'accueil
│   ├── ProjectController.php # Contrôleur pour la gestion des projets
│   ├── TaskController.php    # Contrôleur pour la gestion des tâches
│   └── userController.php    # Contrôleur pour la gestion des utilisateurs
├── database/
│   └── schema.sql           # Script de création des tables de la BDD
├── models/
│   ├── Project.php          # Modèle Projet (méthodes CRUD)
│   ├── Task.php             # Modèle Tâche (méthodes CRUD)
│   └── user.php             # Modèle Utilisateur (méthodes CRUD)
├── public/
│   ├── css/
│   │   └── style.css        # Feuilles de style de l'application
│   └── js/
│       └── app.js           # Scripts JavaScript (modal, compteurs...)
├── views/
<<<<<<< HEAD
│   ├── layout/              # Header et Footer communs
│   ├── projects/            # Vues des projets (index, create, edit, show)
│   ├── tasks/               # Vues des tâches (index, create, edit)
│   ├── user/                # Vues des utilisateurs (user, edit)
│   └── accueil.php          # Vue de la page d'accueil
├── index.php                # Point d'entrée principal (Routeur)
└── README.md                # Documentation du projet
```

# Répartition du travail au sein du groupe 

Melain 
  Gestion de Base de donnée
  Gestion CRUD Utilisateur
Timo 
 Gestion CRUD Projets et taches
 Gestion Du front-end
wILLIAM 
 Gestion du Front-end et le readme
 Gestion CRUD Utilisateur

=======
│   ├── accueil.php
│   ├── user.php
│   ├── layout/
│   ├── projects/
│   └── tasks/
├── index.php
├── README.md
```
>>>>>>> be7e45156f3adad524b9344b1753b965036fc442
