<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
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

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-right: 1rem;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
        }
        .primary:hover {
            background-color: #00cc5a;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="?controller=accueil&action=show">Accueil</a></li>
                <li><a href="#">Projets</a></li>
                <li><a href="#">Tâches</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>