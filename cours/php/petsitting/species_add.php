<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once __DIR__ . '/utils.php';


if(isset($_POST['species']) && !empty($_POST['species'])) {
    $speciesName = trim($_POST['species']);

    require_once __DIR__ . '/model/species.model.php';

    $success = addSpecies($pdo, $speciesName);
    if($success) {
       $flashMessage = "L'espèce a été ajoutée avec succès.";
    } else {
       $flashMessage = "Une erreur est survenue lors de l'ajout de l'espèce.";
    }
}



require_once __DIR__ .'/view/species/add.view.php';