<?php

/**
 * affiche les erreurs
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



require_once __DIR__ . '/class/Compte.php';

$khalil = new Compte();
$khalil->setNumero('FR001');
$khalil->setSolde(1);

$khalil->deposer(1);

echo '<pre>';
var_dump($khalil);
echo '</pre>';




