<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once __DIR__ . '/utils.php';



// model
require_once __DIR__ . '/model/species.model.php';
$species = findAllSpecies($pdo);

// vue
require_once __DIR__ . '/view/species/list.view.php';
