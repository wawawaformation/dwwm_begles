<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

use App\Model\Entity\Espece;

$chien  = new Espece();
$chien->hydrate([
    'id' => 20,
    'espece' => 'humain',
    'pates'=>4
]);

echo '<pre>';
var_dump($chien);
echo '</pre>';