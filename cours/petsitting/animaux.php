<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once __DIR__ . '/utils.php';

?>
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
        <?php
        // on recurere les animaux
        require_once __DIR__ . '/model/pdo.php';

        $sql = 'SELECT animal.id, animal.name, animal.is_vaccinated,
DATE_FORMAT(animal.birthday,"%d/%m/%Y") AS birthday, species.id AS species_id, species.species FROM animal
LEFT JOIN species ON species.id = animal.species_id';
        $q = $pdo->query($sql);

        $animals = $q->fetchAll();

        foreach ($animals as $animal) {
            echo '<div class="animal">';
            echo '<h2>' . htmlspecialchars($animal['name']) . '</h2>';
            echo '<p>Espèce: ' . htmlspecialchars($animal['species']) . '</p>';
            echo '<p>Date de naissance: ' . htmlspecialchars($animal['birthday']) . '</p>';
            echo '<p>Vacciné: ' . ($animal['is_vaccinated'] ? 'Oui' : 'Non') . '</p>';
            echo '</div>';
        }


        ?>
    </main>
    <footer id="footer">
    </footer>
</body>

</html>