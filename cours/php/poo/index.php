<?php

/**
 * affiche les erreurs
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



require_once __DIR__ . '/class/CompteBancaire.php';


$region = new CompteBancaire(solde: 10000000, titulaire: 'region');
$apprenant = new CompteBancaire(titulaire: 'apprenant', solde: -500);


$apprenant->deposer(-20);

$apprenant->retirer(40);

$region->faireVirement(compte: $apprenant, virement: 400);


echo '<pre>';
var_dump($region,$apprenant);
echo '</pre>';






