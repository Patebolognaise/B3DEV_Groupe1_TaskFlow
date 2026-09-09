<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Utilisateurs</title>
    <link rel="stylesheet" href="public/css/style.css">
    
</head>
<body>
   
    <section>
        <header>
            <a href="#" onclick="toggleForm()">Ajouter un utilisateur</a>
        </header>
        <article>
            <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($Users as $user): ?>
                    <tr>
                        <td><?= $user['id_user'] ?></td>
                        <td><?= $user['nom'] ?></td>
                        <td><?= $user['prenom'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['tel'] ?></td>
                        <td><a href="?controller=user&action=edit&id=<?= $user['id_user'] ?>">Modifier</a>
                        <a href="?controller=user&action=delete&id=<?= $user['id_user'] ?>">Supprimer</a></td>
                       
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </article>
    </section>

    <div class="modal-addUser">
        <div class="modal-header">
            <h2>Ajouter un utilisateur</h2>
            <button class="close" onclick="toggleForm()">X</button>
        </div>
        <div class="modal-body">
            <form action="?controller=user&action=AddUser" method="POST">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
                <label for="motdepasse">Mot de passe</label>
                <input type="password" id="motdepasse" name="motdepasse">
                <label for="telephone">Téléphone</label>
                <input type="text" id="telephone" name="telephone">
                <button type="submit">Ajouter</button>
            </form>
        </div>
    </div>
    <script src="public/js/app.js"></script>
    <script>
    
        function toggleForm() {
            var form = document.querySelector('.modal-addUser');
            if (form.style.display === 'none') {
                form.style.display = 'block';
            } else {
                form.style.display = 'none';
            }
        }
        

    </script>
</body>
</html>