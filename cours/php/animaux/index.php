<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

use App\Model\Entity\Animal;


$entity = new Animal();

$entity->hydrate([
    'id' => 1, 
    'nom' => 'Rex', 
    'espece_id' => 1]);




echo '<pre>';
var_dump($entity);
echo '</pre>';


