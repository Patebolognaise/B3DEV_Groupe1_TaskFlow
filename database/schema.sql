CREATE TABLE role (
    id_role INT AUTO_INCREMENT PRIMARY KEY,
    nom_role VARCHAR(100) NOT NULL
);

CREATE TABLE User (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    tel VARCHAR(20),
    date_ DATE,
    password VARCHAR(255) NOT NULL,
    id_role INT NOT NULL,
    FOREIGN KEY (id_role) REFERENCES role(id_role)
);

CREATE TABLE Projet (
    id_projet INT AUTO_INCREMENT PRIMARY KEY,
    titre_projet VARCHAR(200) NOT NULL,
    description TEXT,
    date_ DATE,
    statut_projet VARCHAR(50)
);


CREATE TABLE Tache (
    id_tache INT AUTO_INCREMENT PRIMARY KEY,
    titre_tache VARCHAR(200) NOT NULL,
    description TEXT,
    date_de_creation DATE,
    priorite VARCHAR(50),
    statut_tache VARCHAR(50),
    deadline DATE,
    id_projet INT NOT NULL,
    FOREIGN KEY (id_projet) REFERENCES Projet(id_projet)
);


CREATE TABLE Attribuer (
    id_user INT NOT NULL,
    id_projet INT NOT NULL,
    poste VARCHAR(100),
    PRIMARY KEY (id_user, id_projet),
    FOREIGN KEY (id_user) REFERENCES User(id_user),
    FOREIGN KEY (id_projet) REFERENCES Projet(id_projet)
);