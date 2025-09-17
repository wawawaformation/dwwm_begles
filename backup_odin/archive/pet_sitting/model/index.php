<?php

ini_set(option:'display_errors', value:1);
ini_set(option: 'display_startup_errors', value:1);
error_reporting(E_ALL);


require_once __DIR__ .'/pdo.php';

$id= 5;

$sql = 'SELECT * FROM animal WHERE id=?';
$q = $pdo-> prepare($sql);
$q-> bindValue('id', $id, PDO::PARAM_INT);
$q -> execute([$id]);


$data = $q -> fetchAll ();
echo '<pre>';
print_r ($data);
echo '<pre>';