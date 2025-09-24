<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Banque\CompteEpargne; // il a mis le use

use Client\Compte as CompteClient; //on peut renommer une classe importée avec 'as'

require_once __DIR__ . '/class/Banque/CompteEpargne.php';
require_once __DIR__ . '/class/Client/Compte.php';
require_once __DIR__ . '/class/Debug.php';


$compteClient = new CompteClient('Maryon', 'Mouhel');
$compteEpargne = new CompteEpargne('DWWM', 1000);

Debug::dump($compteClient);
Debug::dump($compteEpargne);
