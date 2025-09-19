<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once  '../pdo.php';
require_once  '../../utils.php';

$sql = 'SELECT * FROM species';
$q = $pdo->query($sql);

$species = $q->fetchAll();

pre_print_r($species);
