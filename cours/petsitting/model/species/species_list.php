<?php

require_once __DIR__ .'../pdo.php';
require_once __DIR__ . '../../utils.php';


$sql = 'SELECT * FROM species';


$q = $pdo->query($sql);

$species = $q->fetchAll();

pre_print_r($species);