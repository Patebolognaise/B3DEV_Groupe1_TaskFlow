<?php
$tasks = $tasks ?? [];
$taskCount = count($tasks);
?>

<section class="page-header">
    <div>
        <p class="eyebrow">Gestion</p>
        <h1>Tâches <span id="task-counter" class="counter-badge"><?= $taskCount ?> tâche<?= $taskCount > 1 ? 's' : '' ?></span></h1>
    </div>
    <a class="button primary" href="?controller=task&action=create">Nouvelle tâche</a>
</section>

<?php if (empty($tasks)): ?>
    <div class="empty-state card">
        <h2>Aucune taches</h2>
        <p>Créer une tache pour votre projet.</p>
        <a class="button primary" href="?controller=task&action=create">Creer une tache</a>
    </div>
<?php else: ?>
    <div class="list-table card">
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Projet</th>
                    <th>Priorité</th>
                    <th>Statut</th>
                    <th>Echéance</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= htmlspecialchars($task['titre_tache'] ?? 'Sans titre') ?></td>
                        <td><?= htmlspecialchars($task['id_projet'] ?? '—') ?></td>
                        <td><span class="chip priority-chip"><?= htmlspecialchars($task['priorite'] ?? 'Moyenne') ?></span></td>
                        <td><span class="chip status-chip"><?= htmlspecialchars($task['statut_tache'] ?? 'À faire') ?></span></td>
                        <td><?= htmlspecialchars($task['deadline'] ?? '—') ?></td>
                        <td>
                            <a href="?controller=task&action=edit&id=<?= $task['id_tache'] ?>">Modifier</a>
                            <a href="?controller=task&action=delete&id=<?= $task['id_tache'] ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>
