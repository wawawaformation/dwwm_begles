<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/pdo.php';

//http://localhost/author?id=4
$id = '4 OR 1=1';


$sql = 'SELECT * FROM author WHERE id=?'  ;
$q = $pdo->prepare($sql);
$q->execute([$id]);
$data = $q->fetch();


echo '<pre>';
    print_r($data);
echo '</pre>';

