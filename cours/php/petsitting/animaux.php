<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once __DIR__ . '/utils.php';

// Il va cherche les donnees dans la base de donnees
require_once __DIR__ . '/model/animals.model.php';
$animals = findAllAnimals($pdo);

// Il affiche la vue
require_once __DIR__ . '/view/animals/list.view.php';

?>
