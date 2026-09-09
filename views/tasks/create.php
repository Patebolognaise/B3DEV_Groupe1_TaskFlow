<?php
$errorMessage = $errorMessage ?? '';
$projects = $projects ?? [];
$selectedProjectId = (int) ($_GET['id_projet'] ?? 0);
?>

<section class="page-header">
    <div>
        <p class="eyebrow">Création</p>
        <h1>Nouvelle tâche</h1>
    </div>
    <a class="button ghost" href="?controller=task&action=index">Retour</a>
</section>

<div class="form-card card">
    <?php if ($errorMessage !== ''): ?>
        <div class="alert error"><?= htmlspecialchars($errorMessage) ?></div>
    <?php endif; ?>

    <form method="POST" action="?controller=task&action=create" class="form-grid">
        <div class="field">
            <label for="id_projet">Projet</label>
            <select id="id_projet" name="id_projet" required>
                <option value="">Sélectionner un projet</option>
                <?php foreach ($projects as $project): ?>
                    <?php $projectId = (int) ($project['id_projet'] ?? 0); ?>
                    <option value="<?= $projectId ?>" <?= $projectId === $selectedProjectId ? 'selected' : '' ?>>
                        <?= htmlspecialchars($project['titre_projet'] ?? 'Projet sans titre') ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="field">
            <label for="titre_tache">Titre de la tâche</label>
            <input type="text" id="titre_tache" name="titre_tache" required>
        </div>

        <div class="field">
            <label for="priorite">Priorité</label>
            <select id="priorite" name="priorite">
                <option value="Haute">Haute</option>
                <option value="Moyenne" selected>Moyenne</option>
                <option value="Basse">Basse</option>
            </select>
        </div>

        <div class="field">
            <label for="statut_tache">Statut</label>
            <select id="statut_tache" name="statut_tache">
                <option value="À faire" selected>À faire</option>
                <option value="En cours">En cours</option>
                <option value="Terminé">Terminé</option>
            </select>
        </div>

        <div class="field">
            <label for="deadline">Date d’échéance</label>
            <input type="date" id="deadline" name="deadline">
        </div>

        <div class="field full-width">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="5" placeholder="Détaillez la tâche..."></textarea>
        </div>

        <div class="form-actions full-width">
            <button type="submit" class="button primary">Créer la tâche</button>
            <a class="button ghost" href="?controller=task&action=index">Annuler</a>
        </div>
    </form>
</div>
