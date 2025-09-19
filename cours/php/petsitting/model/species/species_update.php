<?php
require_once  '../pdo.php';
require_once  '../../utils.php';

$espece = [
    'id'=>'1',
    'name'=>'cheval'
];

$sql = 'UPDATE species SET species.species = :espece WHERE id= :id';
$q = $pdo->prepare($sql);
$q->bindValue(':espece', $espece['name']);
$q->bindValue(':id', $espece['id']);
$succes = $q->execute();

var_dump($succes);