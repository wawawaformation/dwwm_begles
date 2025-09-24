<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once __DIR__ . '/class/CompteCourant.php';
require_once __DIR__ . '/class/Debug.php';

$maryonCourant = new CompteCourant('maryonCourant', 1200);
$maryonCourant->setDecouvertAutorise(600);
echo $maryonCourant->getDecouvertAutorise();

$maryonCourant->setSolde(300);




Debug::dd($maryonCourant);

