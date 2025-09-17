<?php

//objet PDO: connection à la base de données
try{ //essaye de se connecter à la base de données
    $dsn = 'mysql:host=localhost;dbname=petsitting'; //dsn: destination. Sert à définir la base de donnée cible
    $pdo = new PDO(dsn: $dsn,username: 'petsitting',password: '1234'); //objet crée à partir de la classe PDO
   // $bdd->setAtribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION); //donne un comportement pour les erreurs (ici une 'exception' (arrête le script) (warning donne l'erreur mais continue le script, silent ne dit rien))
    $pdo->setAttribute(attribute: PDO::ATTR_DEFAULT_FETCH_MODE, value: PDO::FETCH_ASSOC); //donne un comportement par défaut à la methode fetch
}catch(Exception $e){ //sinon on arrive pas à se connecter, on envoie l'erreur récupérée
    http_response_code(response_code: 500);
    die('probleme avec la bdd : '. $e->getMessage()); //dis l'erreur et tue le script
}