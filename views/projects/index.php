<?php
$projects = $projects ?? [];
?>

<section class="page-header">
    <div>
        <p class="eyebrow">Gestion</p>
        <h1>Projets</h1>
    </div>
    <a class="button primary" href="?controller=project&action=create">Nouveau projet</a>
</section>

<?php if (empty($projects)): ?>
    <div class="empty-state card">
        <h2>il n'y a aucun projet</h2>
        <p>Créez un premier projet pour organiser vos tache</p>
        <a class="button primary" href="?controller=project&action=create">Créer un projet</a>
    </div>
<?php else: ?>
    <div class="grid cards-grid">
        <?php foreach ($projects as $project): ?>
            <?php
            $projectId = (int) ($project['id_projet'] ?? 0);
            $title = htmlspecialchars($project['titre_projet'] ?? 'Projet sans titre');
            $description = htmlspecialchars($project['description'] ?? 'Aucune description fournie.');
            $status = htmlspecialchars($project['statut_projet'] ?? 'Non défini');
            $date = htmlspecialchars($project['date_'] ?? 'Date inconnue');
            ?>
            <article class="card project-card">
                <span class="chip status-chip"><?= $status ?></span>
                <h2><?= $title ?></h2>
                <p><?= $description ?></p>
                <div class="meta-row">
                    <span>Date de création</span>
                    <strong><?= $date ?></strong>
                </div>
                <div class="card-actions">
                    <a class="button secondary" href="?controller=project&action=show&id=<?= $projectId ?>">Voir</a>
                    <a class="button ghost" href="?controller=project&action=edit&id=<?= $projectId ?>">Modifier</a>
                    <form method="POST" action="?controller=project&action=delete" class="delete-project-form">
                        <input type="hidden" name="id_projet" value="<?= $projectId ?>">
                        <button type="submit" class="button danger">Supprimer</button>
                    </form>
                    <a class="button ghost" href="?controller=task&action=create&id_projet=<?= $projectId ?>">Ajouter une tache</a>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
