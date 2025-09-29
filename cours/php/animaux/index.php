<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

use App\Model\Entity\Espece;

$chien  = new Espece();
$chien->setId(2);
$chien->setEspece('chien'); 
$chien->setId(3);

echo '<pre>';
var_dump($chien);
echo '</pre>';