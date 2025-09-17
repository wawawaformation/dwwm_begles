<?php


require_once __DIR__ .'../pdo.php';
require_once __DIR__ . '../../utils.php';

$id = 3;

$sql = 'DELETE FROM species WHERE  id=:id';
$q = $pdo->prepare(query: $sql);

$q->bindValue(param: ':id', value: $id,type: PDO::PARAM_INT);
$success = $q->execute();

var_dump(value: $success);
$q = $pdo->prepare(query: $sql);
