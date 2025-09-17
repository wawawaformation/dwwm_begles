<?php

$id = 1;

require_once __DIR__ .'../pdo.php';
require_once __DIR__ . '../../utils.php';

$sql = 'SELECT * FROM species WHERE id = :id';

$q = $pdo->prepare(query: $sql);
$q-> bindValue(param: ':id',value: $id, type: PDO::PARAM_INT);
$q->execute();

$result = $q->fetch();

pre_print_r(array: $result);
