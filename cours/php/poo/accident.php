<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


/*
Le scénario :

benjamin achete une voiture porshe rouge 
roxana achete une voiture sans permis jaune
roxana accèlere, accèlere, freine, accèlere, acclere, accèlere, ralenti, embouti benamin et l'insulte 

*/

require_once __DIR__ .'/class/Voiture.php';

$benjamin = new Voiture(modele: 'porshe', couleur: 'rouge');
$roxana =  new Voiture(modele: 'ami', couleur: 'jaune');

$roxana
    ->accelerer()
    ->freiner()
    ->accelerer()
    ->accelerer()
    ->accelerer()
    ->accelerer()
    ->ralentir()
    ->emboutir($benjamin);

echo $roxana->insulter($benjamin, 'aveugle, passe ton permis!');


echo '<pre>';
var_dump($benjamin, $roxana);