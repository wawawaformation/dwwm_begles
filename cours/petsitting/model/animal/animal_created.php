<?php

$animal = [
    "name"=> "Brut",
    "is_vaccinated"=> "1",
    "birthday"=> "2022-01-01",
    "species_id"=> "3"
];


require_once  '../pdo.php';
require_once '../../utils.php';

$sql = 'INSERT INTO animal (name, is_vaccinated, birthday, species_id) VALUES (:name, :is_vaccinated, :birthday, :species_id)';
$q= $pdo->prepare($sql);
$q->bindValue(':name', $animal['name'], PDO::PARAM_STR);
$q->bindValue(':is_vaccinated', $animal['is_vaccinated'], PDO::PARAM_STR);
$q->bindValue(':birthday', $animal['birthday'], PDO::PARAM_STR);
$q->bindValue(':species_id', $animal['species_id'], PDO::PARAM_STR);
$succes = $q->execute();

echo $pdo->lastInsertId() . '<br>';
var_dump($succes);