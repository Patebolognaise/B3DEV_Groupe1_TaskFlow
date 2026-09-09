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
    <h1>Accueil</h1>
    <header>
  <div class="brand">
    <div class="title">Projets</div>
    <div class="sub">Créez un projet et assignez-le à une équipe</div>
  </div>
  <button class="primary" id="openModal">+ Nouveau projet</button>
</header>

</body>
</html>