<section class="user-page">
    <div class="page-header">
        <div>
            <p class="eyebrow">Modification</p>
            <h1>Modifier un utilisateur</h1>
        </div>
        <a class="button ghost" href="?controller=user&action=show">Retour</a>
    </div>
    <article class="form-card card">
        <form action="?controller=user&action=update" method="POST" class="form-grid user-form">
                <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">
                <div class="field"><label for="nom">Nom</label><input type="text" id="nom" name="nom" value="<?= htmlspecialchars($user['nom']) ?>"></div>
                <div class="field"><label for="prenom">Prénom</label><input type="text" id="prenom" name="prenom" value="<?= htmlspecialchars($user['prenom']) ?>"></div>
                <div class="field"><label for="email">Email</label><input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email']) ?>"></div>
                <div class="field"><label for="motdepasse">Mot de passe</label><input type="password" id="motdepasse" name="motdepasse"></div>
                <div class="field"><label for="telephone">Téléphone</label><input type="text" id="telephone" name="telephone" value="<?= htmlspecialchars($user['tel']) ?>"></div>
                <div class="form-actions full-width"><button type="submit" class="button primary">Modifier</button></div>
            </form>
    </article>
</section>