<?php
$project = $project ?? null;
$tasks = $tasks ?? [];
?>

<?php if (!$project): ?>
    <section class="empty-state card">
        <h1>Projet introuvable</h1>
        <p>Le projet demandé n’existe pas ou n’est plus disponible.</p>
        <a class="button primary" href="?controller=project&action=index">Retour aux projets</a>
    </section>
<?php else: ?>
    <?php
    $projectId = (int) ($project['id_projet'] ?? 0);
    $title = htmlspecialchars($project['titre_projet'] ?? 'Projet sans titre');
    $description = htmlspecialchars($project['description'] ?? 'Aucune description.');
    $date = htmlspecialchars($project['date_'] ?? 'Date inconnue');
    $status = htmlspecialchars($project['statut_projet'] ?? 'Non défini');
    ?>

    <section class="page-header">
        <div>
            <p class="eyebrow">Projet</p>
            <h1><?= $title ?></h1>
        </div>
        <div class="header-actions">
            <a class="button ghost" href="?controller=project&action=index">Retour</a>
            <a class="button primary" href="?controller=task&action=create&id_projet=<?= $projectId ?>">+ Ajouter une tâche</a>
        </div>
    </section>

    <div class="detail-grid">
        <article class="card project-detail">
            <h2>Détails</h2>
            <ul class="detail-list">
                <li><strong>Statut :</strong> <?= $status ?></li>
                <li><strong>Date :</strong> <?= $date ?></li>
            </ul>
            <p><?= $description ?></p>
        </article>

        <article class="card">
            <h2>Tâches associées</h2>
            <?php if (empty($tasks)): ?>
                <p>Aucune tâche pour ce projet pour le moment.</p>
            <?php else: ?>
                <ul class="task-list">
                    <?php foreach ($tasks as $task): ?>
                        <li>
                            <div>
                                <strong><?= htmlspecialchars($task['titre_tache'] ?? 'Tâche sans titre') ?></strong>
                                <p><?= htmlspecialchars($task['description'] ?? 'Aucune description.') ?></p>
                                <small><?= htmlspecialchars($task['statut_tache'] ?? 'Non défini') ?> • <?= htmlspecialchars($task['priorite'] ?? 'Moyenne') ?></small>
                            </div>
                            <?php if (!empty($task['deadline'])): ?>
                                <span class="deadline">Échéance : <?= htmlspecialchars($task['deadline']) ?></span>
                            <?php endif; ?>
                            <a href="?controller=task&action=edit&id=<?= $task['id_tache'] ?>">Modifier</a>
                            <a href="?controller=task&action=delete&id=<?= $task['id_tache'] ?>">Supprimer</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </article>
    </div>
<?php endif; ?>
