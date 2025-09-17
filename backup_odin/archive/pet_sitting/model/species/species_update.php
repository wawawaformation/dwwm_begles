<?php

require_once  '../pdo.php';
require_once '../../utils.php';

$espece = [
   "id"=> "1",
   "name" => "chat"
];

$sql = 'UPDATE species SET species.species = :espece WHERE id=:id';
$q = $pdo -> prepare($sql);
$q->bindValue(':espece', $espece['name']);
$q->bindValue(':id',$espece['id']);
$success = $q -> execute();

var_dump($success);