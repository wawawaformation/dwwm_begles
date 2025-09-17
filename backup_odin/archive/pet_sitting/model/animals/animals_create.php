<?php

$form = [
    "name"=> "Moumou",
    "is_vaccinated" => "1",
    "birthday" => "2019-05-02",
    "species_id" => "1",
    
];



require_once  '../pdo.php';
require_once '../../utils.php';


//INSERT INTO table(champs1, champs2) VALUES(valeur1, valeur2)

$sql = 'INSERT INTO animal(name, is_vaccinated, birthday, species_id) VALUES (:name, :is_vaccinated, :birthday, :species_id)';
$q = $pdo -> prepare($sql);
$q -> bindValue(':name',$form['name'], PDO::PARAM_STR);
$q -> bindValue(':is_vaccinated',$form['is_vaccinated'], PDO::PARAM_BOOL);
$q -> bindValue(':birthday',$form['birthday'], PDO::PARAM_STR);
$q -> bindValue(':species_id',$form['species_id'], PDO::PARAM_INT);
$success = $q->execute();

echo $pdo ->lastInsertId() . '<br>';
var_dump($success);