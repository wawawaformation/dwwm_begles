<?php

/**
 * affiche les erreurs
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



require_once __DIR__ . '/class/Compte.php';

$khalil = new Compte();
$khalil->numero = "FR001";
$khalil->solde = 500;


$ayfer = new Compte();
$ayfer->solde = 100000;


$khalil->deposer(-1);

echo '<pre>';
var_dump($khalil, $ayfer);
echo '</pre>';

echo $ayfer->solde . ' euros';


