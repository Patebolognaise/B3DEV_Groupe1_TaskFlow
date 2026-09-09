<section class="page-header">
    <div>
        <p class="eyebrow">Modification</p>
        <h1>Modifier la tâche</h1>
    </div>
    <a class="button ghost" href="?controller=task&action=index">Retour</a>
</section>

<div class="form-card card">
    <form method="POST" action="?controller=task&action=index" class="form-grid">
        <div class="field">
            <label for="titre_tache">Titre</label>
            <input type="text" id="titre_tache" name="titre_tache" value="Créer la maquette accueil">
        </div>

        <div class="field">
            <label for="priorite">Priorité</label>
            <select id="priorite" name="priorite">
                <option value="Haute" selected>Haute</option>
                <option value="Moyenne">Moyenne</option>
                <option value="Basse">Basse</option>
            </select>
        </div>

        <div class="field">
            <label for="statut_tache">Statut</label>
            <select id="statut_tache" name="statut_tache">
                <option value="À faire">À faire</option>
                <option value="En cours" selected>En cours</option>
                <option value="Terminé">Terminé</option>
            </select>
        </div>

        <div class="field">
            <label for="deadline">Échéance</label>
            <input type="date" id="deadline" name="deadline" value="2026-09-12">
        </div>

        <div class="field full-width">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="5">Réaliser les blocs de présentation, les CTA et la section de contact.</textarea>
        </div>

        <div class="form-actions full-width">
            <button type="submit" class="button primary">Enregistrer</button>
            <a class="button ghost" href="?controller=task&action=index">Annuler</a>
        </div>
    </form>
</div>
