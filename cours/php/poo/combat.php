<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


/* brief
Personnage :
$force = 10
$xp = 0
$pv = 100
$nom

-> creer un personnage
-> gagner de l'experience (a chaque fin de combat)
-> regenrer de la vie (revient à 100)
-> Taper un autre Personnage (l'autre peut)
-> pousser un cri de guerr
-> xp augment à chaque combat
*/





require __DIR__ . '/class/Personnage.php';

$ayfer = new Personnage('ayfer', 20);
$thomas = new Personnage('thomas', 5);

$ayfer->regenerPv();


echo $ayfer->frapper($thomas);
echo $thomas->frapper($thomas);

echo $thomas->hurler();
echo $ayfer->frapper($thomas);
echo $ayfer->frapper($thomas);
echo $ayfer->frapper($thomas);
echo $ayfer->frapper($thomas);
echo $ayfer->frapper($thomas);


echo '<pre>';
var_dump($ayfer, $thomas);


