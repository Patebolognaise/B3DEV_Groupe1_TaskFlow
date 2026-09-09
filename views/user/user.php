<section class="user-page">
    <div class="page-header">
        <div>
            <p class="eyebrow">Gestion</p>
            <h1>Utilisateurs</h1>
        </div>
        <button type="button" class="button primary" onclick="toggleForm()">Ajouter un utilisateur</button>
    </div>
    <article class="card list-table">
        <table>
            <thead>
                <tr>
                    <th>Id</th><th>Nom</th><th>Prénom</th><th>Email</th><th>Téléphone</th><th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($Users as $user): ?>
                    <tr>
                        <td><?= htmlspecialchars($user['id_user']) ?></td>
                        <td><?= htmlspecialchars($user['nom']) ?></td>
                        <td><?= htmlspecialchars($user['prenom']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                        <td><?= htmlspecialchars($user['tel']) ?></td>
                        <td>
                            <a href="?controller=user&action=edit&id=<?= $user['id_user'] ?>">Modifier</a>
                            <a href="?controller=user&action=delete&id=<?= $user['id_user'] ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </article>
</section>

<div class="modal-addUser">
    <div class="modal-header">
        <h2>Ajouter un utilisateur</h2>
        <button type="button" class="close" onclick="toggleForm()">X</button>
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
            <button type="submit" class="button primary">Ajouter</button>
        </form>
    </div>
</div>
<script src="public/js/app.js"></script>