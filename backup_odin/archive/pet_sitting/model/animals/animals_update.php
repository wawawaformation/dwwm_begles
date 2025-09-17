<?php

require_once '../pdo.php';
require_once '../../utils.php';

$animal = [
    "id" => "9",
    "name" => "Moumoute",
    "is_vaccinated" => "1",
    "birthday" => "2019-05-02",
    "species_id" => "1",
];

$sql = 'UPDATE animal(id ,name, is_vaccinated, birthday, species_id) SET animal(id, name, is_vaccinated, birthday, species_id) = :animal WHERE animal(id, name, is_vaccinated, birthday, species_id)';
$q = $pdo->prepare($sql);
$q -> bindValue(':id', $animal['id']);
$q -> bindValue(':name',$animal['name'], PDO::PARAM_STR);
$q -> bindValue(':is_vaccinated',$animal['is_vaccinated'], PDO::PARAM_BOOL);
$q -> bindValue(':birthday',$animal['birthday'], PDO::PARAM_STR);
$q -> bindValue(':species_id',$animal['species_id'], PDO::PARAM_INT);
$success = $q->execute();

var_dump($success);