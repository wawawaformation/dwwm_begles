<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//on fait de la config
// aller chercher les fichiers de conf
// ...etc




//http://localhost/cours/TP_router/index.php?page=contact
// on route
if(isset($_GET['page'])){
    switch($_GET['page']){
        case 'accueil':
        case 'contact':
        case 'blog':
            $page = $_GET['page'];
            break;
        default: 
            $page = '404';
            break;
    }
}else{
    $page = 'accueil';
}

require_once 'pages/' . $page . '.php';