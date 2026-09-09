<section class="page-header">
    <div>
        <p class="eyebrow">Modification</p>
        <h1>Modifier la tâche</h1>
    </div>
    <a class="button ghost" href="?controller=task&action=index">Retour</a>
</section>

<div class="form-card card">
    <form action="?controller=task&action=update" method="POST" class="form-grid">
        <input type="hidden" name="id_tache" value="<?= htmlspecialchars($task['id_tache'] ?? '') ?>">

        <div class="field">
            <label for="titre_tache">Titre</label>
            <input type="text" id="titre_tache" name="titre_tache" value="<?= htmlspecialchars($task['titre_tache'] ?? '') ?>" required>
        </div>
        <div class="field">
            <label for="priorite">Priorité</label>
            <input type="text" id="priorite" name="priorite" value="<?= htmlspecialchars($task['priorite'] ?? '') ?>">
        </div>
        <div class="field">
            <label for="statut_tache">Statut</label>
            <input type="text" id="statut_tache" name="statut_tache" value="<?= htmlspecialchars($task['statut_tache'] ?? '') ?>">
        </div>
        <div class="field">
            <label for="deadline">Échéance</label>
            <input type="date" id="deadline" name="deadline" value="<?= htmlspecialchars($task['deadline'] ?? '') ?>">
        </div>
        <div class="field">
            <label for="id_projet">Projet</label>
            <input type="text" id="id_projet" name="id_projet" value="<?= htmlspecialchars($task['id_projet'] ?? '') ?>">
        </div>
        <div class="field full-width">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="5"><?= htmlspecialchars($task['description'] ?? '') ?></textarea>
        </div>
        <div class="form-actions full-width">
            <button type="submit" class="button primary">Modifier</button>
            <a class="button ghost" href="?controller=task&action=index">Annuler</a>
        </div>
    </form>
</div>