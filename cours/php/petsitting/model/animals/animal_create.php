<?php

$animal = [
    'name'=> 'Minou',
    'is_vaccinated'=> '1',
    'birthday'=> '2015-01-01'
];

require_once  '../pdo.php';
require_once  '../../utils.php';

$sql = 'INSERT INTO animal(name, is_vaccinated, birthday) VALUES (:name, :is_vaccinated, :birthday)';
$q = $pdo->prepare($sql);
$q->bindValue(':name', $animal['name'],PDO::PARAM_STR);
$q->bindValue(':is_vaccinated', $animal['is_vaccinated'],PDO::PARAM_BOOL);
$q->bindValue(':birthday', $animal['birthday'],PDO::PARAM_STR);
$succes = $q->execute();

echo $pdo->lastInsertId() . '<br>';
var_dump($succes);
