<?php
$errorMessage = $errorMessage ?? '';
$project = $project ?? [];
?>

<section class="page-header">
    <div>
        <p class="eyebrow">Modification</p>
        <h1>Modifier le projet</h1>
    </div>
    <a class="button ghost" href="?controller=project&action=index">Retour</a>
</section>

<div class="form-card card">
    <?php if ($errorMessage !== ''): ?>
        <div class="alert error"><?= htmlspecialchars($errorMessage) ?></div>
    <?php endif; ?>

    <form method="POST" action="?controller=project&action=edit" class="form-grid">
        <input type="hidden" name="id_projet" value="<?= (int) ($project['id_projet'] ?? 0) ?>">

        <div class="field">
            <label for="titre_projet">Titre du projet</label>
            <input type="text" id="titre_projet" name="titre_projet" value="<?= htmlspecialchars($project['titre_projet'] ?? '') ?>" required>
        </div>

        <div class="field">
            <label for="date_">Date</label>
            <input type="date" id="date_" name="date_" value="<?= htmlspecialchars($project['date_'] ?? date('Y-m-d')) ?>">
        </div>

        <div class="field">
            <label for="statut_projet">Statut</label>
            <select id="statut_projet" name="statut_projet">
                <?php
                $statusOptions = ['En cours', 'À venir', 'Terminé'];
                $selectedStatus = (string) ($project['statut_projet'] ?? 'En cours');
                foreach ($statusOptions as $option) {
                    $selected = $selectedStatus === $option ? 'selected' : '';
                    echo '<option value="' . htmlspecialchars($option) . '" ' . $selected . '>' . htmlspecialchars($option) . '</option>';
                }
                ?>
            </select>
        </div>

        <div class="field full-width">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="5"><?= htmlspecialchars($project['description'] ?? '') ?></textarea>
        </div>

        <div class="form-actions full-width">
            <button type="submit" class="button primary">Enregistrer</button>
            <a class="button ghost" href="?controller=project&action=index">Annuler</a>
        </div>
    </form>
</div>
