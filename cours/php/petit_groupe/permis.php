<?php


//controller 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!isset($_GET['age'])){
    die('en attente de l\'age');
}

$age = intval($_GET['age']);

$msg = '';

if($age >= 18){
    $msg = 'ok';
}elseif($age >= 16){
    $msg = 'conduite accompagné';
}else{
    $msg = 'vélo';
}
?>



<!-- la vue -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Tu as <?= htmlspecialchars($_GET['age']) ?>an<?= $age > 1 ? 's' : '' ?> : <?=  $msg ?>
</body>
</html>