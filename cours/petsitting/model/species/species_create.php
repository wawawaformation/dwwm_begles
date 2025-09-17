<?php

$form = [
    "species"=>"NAC"
]; 

require_once __DIR__ .'../pdo.php';
require_once __DIR__ . '../../utils.php';

// INSERT INTO table(champ1, champ2) VALUES(valeur1, valeur2);

$sql = "INSERT INTO species(species.species) VALUES(:espece)";

$q = $pdo->prepare(query: $sql);
$q->bindValue(param: ':espece',value: $form['species'], type: PDO::PARAM_STR);
$succes = $q->execute();
echo $pdo->lastInsertId() . '<br>';
var_dump(value: $succes);
