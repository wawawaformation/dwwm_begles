<?php

$form = [
    "species"=> "BAC"
];


require_once  '../pdo.php';
require_once '../../utils.php';

// INSERT INTO table (champ1, champ2) VALUES(valeur1, valeur2);

$sql = 'INSERT INTO species(species.species) VALUES(:espece)';
$q = $pdo ->prepare($sql);
$q->bindValue(':espece', $form['species'], PDO::PARAM_STR);
$succes = $q->execute();

echo $pdo-> lastInsertId()  . '<br>';
var_dump($succes);



