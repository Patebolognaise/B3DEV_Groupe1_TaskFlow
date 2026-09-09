<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier la tâche</title>
</head>
<body>
    <h1>Modifier la tâche</h1>
    <form action="?controller=task&action=update" method="POST">
        <label for="titre_tache">Titre</label>
        <input type="hidden" name="id_tache" value="<?= $task['id_tache'] ?>">
        <input type="text" id="titre_tache" name="titre_tache" value="<?= $task['titre_tache'] ?>">
        <label for="description">Description</label>
        <input type="text" id="description" name="description" value="<?= $task['description'] ?>">
        <label for="priorite">Priorité</label>
        <input type="text" id="priorite" name="priorite" value="<?= $task['priorite'] ?>">
        <label for="statut_tache">Statut</label>
        <input type="text" id="statut_tache" name="statut_tache" value="<?= $task['statut_tache'] ?>">
        <label for="deadline">Échéance</label>
        <input type="date" id="deadline" name="deadline" value="<?= $task['deadline'] ?>">
        <label for="id_projet">Projet</label>
        <input type="text" id="id_projet" name="id_projet" value="<?= $task['id_projet'] ?>">
        <button type="submit">Modifier</button>
        <button type="button" onclick="window.location.href='?controller=task&action=index'">Annuler</button>
    </form>
    
</body>
</html>