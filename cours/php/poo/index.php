<?php


echo 'on test';

require_once __DIR__ . '/class/Compte.php';
require_once __DIR__ . '/class/Debug.php';


$maryon = new Compte('Maryon', 300);

$region = new Compte('region', 10000000);


$region->effectuerVirement($maryon, 3000);


Debug::dump($region);
Debug::dump($maryon);

