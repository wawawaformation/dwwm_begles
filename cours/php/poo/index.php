<?php

/**
 * affiche les erreurs
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



require_once __DIR__ . '/class/Compte.php';

$khalil = new Compte('FR001',1000);

echo 'Le solde de khalil est de ' . $khalil->getSolde() . ' euros <br>';

echo '<pre>';
var_dump($khalil);
echo '</pre>';




