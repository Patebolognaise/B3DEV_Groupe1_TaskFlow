<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Styles for the header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background-color: #f0f0f0;
            border-bottom: 1px solid #ccc;
        }

        .brand {
            display: flex;
            flex-direction: column;
        }

        .title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .sub {
            font-size: 0.9rem;
            color: #666;
        }

        .primary {
            background-color: #00ff6e;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
        }
        .primary hover {
            background-color: #31513f;
        }
    </style>
</head>


<body>
    <section class="card hero-card">
        <p class="eyebrow">Bienvenue</p>
        <h1>TaskFlow</h1>
        <p>Gérez vos projets et organisez vos tâches en un seul endroit.</p>
        <div class="card-actions">
            <a class="button primary" href="?controller=project&action=index">Voir les projets</a>
            <a class="button secondary" href="?controller=task&action=index">Voir les tâches</a>
        </div>
    </section>

    <div class="grid">
        <article class="card">
            <h2>Projets</h2>
            <p>Suivez les objectifs, les statuts et les dates importantes de chaque projet.</p>
            <a class="button ghost" href="?controller=project&action=create">Créer un projet</a>
        </article>

        <article class="card">
            <h2>Tâches</h2>
            <p>Assignez les priorités, les échéances et les états d’avancement de chaque tâche.</p>
            <a class="button ghost" href="?controller=task&action=create">Créer une tâche</a>
        </article>
    </div>
</body>
</html>