<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/pdo.php';


//$sql = //PHPMyadMin
//$q = $pdo->query()/prepare()
//$q->bindValue() autant de fois que nécessaire
//$q->execute();
//$q->fetch(); Si read ou list
//$q->closeCursor(); // optionnel sur MySQL


$sql = 'SELECT * FROM author WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', '4', PDO::PARAM_INT);
$stmt->execute();
$author = $stmt->fetch();


echo '<pre>';
print_r($author);
echo '</pre>';