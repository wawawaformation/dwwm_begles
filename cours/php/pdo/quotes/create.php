<?php

declare(strict_types=1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$post = [
    'email'=>'ben@gmail.com',
    'password'=>'1234'
]; // on s'imagine que cela vient d'un formulaire et ca a été nettoyé pour XSS

require_once __DIR__ . '/pdo.php';

//$sql = //PHPMyadMin
//$q = $pdo->query()/prepare()
//$q->bindValue() autant de fois que nécessaire
//$q->execute();
//$q->fetch(); Si read ou list
//$q->closeCursor(); // optionnel sur MySQL

$sql = 'INSERT INTO user(user.email, user.password) 
VALUES (:email, :password)';
$q = $pdo->prepare($sql);
$q->bindValue(':email', $post['email']);
$q->bindValue(':password', $post['password']);
$retour = $q->execute();

var_dump($retour);
var_dump($pdo->lastInsertId());