<?php
require_once  '../pdo.php';
require_once  '../../utils.php';

$sql = 'SELECT species FROM species WHERE id = 1';
$q = $pdo->query($sql);
echo $q->fetchColumn();
