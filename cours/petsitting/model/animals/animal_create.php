<?php

$animal = [
    "name"=> "biscotte",
    "is_vaccinated"=> "1",
    "birthday"=>"18/10/1989",
    "species_id"=>"4"
]; 

require_once __DIR__ .'../pdo.php';
require_once __DIR__ . '../../utils.php';

// INSERT INTO table(champ1, champ2) VALUES(valeur1, valeur2);

$sql = "INSERT INTO animal(name, is_vaccinated, birthday, species_id )
VALUES(:name, :is_vaccinated, :birthday, :species_id)";

$q = $pdo->prepare(query: $sql);
$q->bindValue(param: ':name',value: $animal['name'], type: PDO::PARAM_STR);
$q->bindValue(param: ':is_vaccinated', value:
$q->bindValue(param: ':birthday', value:
$q->bindValue(param: ':species_id', value:

