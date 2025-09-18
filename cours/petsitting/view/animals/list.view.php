<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animaux | petsitting </title>
    <link rel="stylesheet" href="public/styles.css">
</head>

<body>
    <header id="header">
        <a>Animaux</a>
        <nav>
            <ul class="menu menu-principal">
                <li class="item"><a href="#">Les especes</a></li>
                <li class="item"><a href="#">Les Animaux</a></li>
                <li class="item"><a href="#">Les réservations</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Liste des animaux</h1>
        <div class="animaux">
        <?php foreach ($animals as $animal) : ?>
            <div class="animal">
                <h2><?= htmlspecialchars($animal['name']) ?></h2>
                <p>Espèce: <?= htmlspecialchars($animal['species']) ?></p>
                <p>Date de naissance: <?= htmlspecialchars($animal['birthday']) ?></p>
                <p>Vacciné: <?= $animal['is_vaccinated'] ? 'Oui' : 'Non' ?></p>
            </div>
        <?php endforeach; ?>
        </div>
        
    </main>
    <footer id="footer">
    </footer>
</body>

</html>