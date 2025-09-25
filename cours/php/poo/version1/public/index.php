<?php

use App\Banque\CompteCourant;




ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once dirname(__DIR__) . '/config/const.php';


require_once ROOT . '/vendor/autoload.php'; //on charge autoload

$maryon =new CompteCourant('Maryon', 1500, 500);

dd($maryon);