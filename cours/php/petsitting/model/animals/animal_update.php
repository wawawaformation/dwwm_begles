<?php
require_once  '../pdo.php';
require_once  '../../utils.php';

$animal = [
    'id'=>'1',
    'name'=>'pierre'
];

$sql = 'UPDATE animal SET animal.name = :animal WHERE id= :id';
$q = $pdo->prepare($sql);
$q->bindValue(':animal', $animal['name']);
$q->bindValue(':id', $animal['id']);
$succes = $q->execute();

var_dump($succes);