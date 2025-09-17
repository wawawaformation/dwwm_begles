<?php


require_once __DIR__ .'../pdo.php';
require_once __DIR__ . '../../utils.php';
$espece = [

"id"=> "1",
"name"=> "cheval"

];

$sql = 'UPDATE species SET species.species = :espece WHERE id=:id';
$q = $pdo->prepare(query: $sql);
$q->bindValue(param: 'espece', value: $espece[ 'name']);
$q->bindValue(param: ':id', value: $espace ['id']);

$success = $q->execute();

var_dump(value: $success);
