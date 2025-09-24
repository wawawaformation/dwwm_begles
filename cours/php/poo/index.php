<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once __DIR__ . '/class/CompteCourant.php';
require_once __DIR__ . '/class/CompteEpargne.php';
require_once __DIR__ . '/class/Debug.php';

$maryonCourant = new CompteCourant('maryonCourant', 1200, 600);


$maryonCourant->setSolde(300);


$meganeEpargne = new CompteEpargne('Meganne', 2000);
$meganeEpargne->verserTaux();
$maryonCourant->effectuerVirement($meganeEpargne, 300);
CompteEpargne::changerTaux(2);
$meganeEpargne->verserTaux();
$meganeEpargne->effectuerVirement($maryonCourant, 1000);




Debug::dump($meganeEpargne);
Debug::dd($maryonCourant);

