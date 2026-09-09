<section class="page-header">
    <div>
        <p class="eyebrow">Modification</p>
        <h1>Modifier le projet</h1>
    </div>
    <a class="button ghost" href="?controller=project&action=index">Retour</a>
</section>

<div class="form-card card">
    <form method="POST" action="?controller=project&action=index" class="form-grid">
        <div class="field">
            <label for="titre_projet">Titre du projet</label>
            <input type="text" id="titre_projet" name="titre_projet" value="Refonte du site vitrine">
        </div>

        <div class="field">
            <label for="date_">Date</label>
            <input type="date" id="date_" name="date_" value="2026-09-01">
        </div>

        <div class="field">
            <label for="statut_projet">Statut</label>
            <select id="statut_projet" name="statut_projet">
                <option value="En cours" selected>En cours</option>
                <option value="À venir">À venir</option>
                <option value="Terminé">Terminé</option>
            </select>
        </div>

        <div class="field full-width">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="5">Mise à jour du design et des contenus de la page d’accueil.</textarea>
        </div>

        <div class="form-actions full-width">
            <button type="submit" class="button primary">Enregistrer</button>
            <a class="button ghost" href="?controller=project&action=index">Annuler</a>
        </div>
    </form>
</div>
