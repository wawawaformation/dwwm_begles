<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "tools.php";



//http://localhost/cours/index.php?firstname=<script>alert('virus')</script>



// htmlscpecialchar(), striptags
// isset, empty


//echo htmlspecialchars($_GET['firstname']);

if(isset($_GET['age'])){
    var_dump($_GET['age']);
    echo intval($_GET['age']);
}else{
    die('Une erreur a été rencontrée');
}


