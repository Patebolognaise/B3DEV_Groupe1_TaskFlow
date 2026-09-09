<?php
$errorMessage = $errorMessage ?? '';
?>

<section class="page-header">
    <div>
        <p class="eyebrow">Création</p>
        <h1>Nouveau projet</h1>
    </div>
    <a class="button ghost" href="?controller=project&action=index">Retour</a>
</section>

<div class="form-card card">
    <?php if ($errorMessage !== ''): ?>
        <div class="alert error"><?= htmlspecialchars($errorMessage) ?></div>
    <?php endif; ?>

    <form method="POST" action="?controller=project&action=create" class="form-grid">
        <div class="field">
            <label for="titre_projet">Titre du projet</label>
            <input type="text" id="titre_projet" name="titre_projet" required>
        </div>

        <div class="field">
            <label for="date_">Date de création</label>
            <input type="date" id="date_" name="date_" value="<?= date('Y-m-d') ?>">
        </div>

        <div class="field">
            <label for="statut_projet">Statut</label>
            <select id="statut_projet" name="statut_projet">
                <option value="En cours">En cours</option>
                <option value="À venir">À venir</option>
                <option value="Terminé">Terminé</option>
            </select>
        </div>

        <div class="field full-width">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="5" placeholder="Décrivez le projet..."></textarea>
        </div>

        <div class="form-actions full-width">
            <button type="submit" class="button primary">Créer le projet</button>
            <a class="button ghost" href="?controller=project&action=index">Annuler</a>
        </div>
    </form>
</div>
