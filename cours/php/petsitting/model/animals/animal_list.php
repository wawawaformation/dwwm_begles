<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once  '../pdo.php';
require_once  '../../utils.php';

$sql = 'SELECT animal.id, animal.name, animal.is_vaccinated,
DATE_FORMAT(animal.birthday,"%d/%m/%Y") AS birthday, species.id AS species_id, species.species FROM animal
LEFT JOIN species ON species.id = animal.species_id';
$q = $pdo->query($sql);

$animals = $q->fetchAll();

pre_print_r($animals);
