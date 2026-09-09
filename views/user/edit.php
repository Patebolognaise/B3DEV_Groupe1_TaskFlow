<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification Utilisateur</title>
</head>
<body>
    

    <section>
        <header>
            <h1>Modification Utilisateur</h1>
        </header>
        <article>
            <form action="?controller=user&action=update" method="POST">
                <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" value="<?= $user['nom'] ?>">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" value="<?= $user['prenom'] ?>">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?= $user['email'] ?>">
                <label for="motdepasse">Mot de passe</label>
                <input type="password" id="motdepasse" name="motdepasse" value="<?= $user['password'] ?>">
                <label for="telephone">Téléphone</label>
                <input type="text" id="telephone" name="telephone" value="<?= $user['tel'] ?>">
                <button type="submit">Modifier</button>
            </form>
        </article>
    </section>
</body>
</html>