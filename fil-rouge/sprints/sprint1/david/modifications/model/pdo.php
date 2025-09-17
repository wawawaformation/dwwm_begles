<?php
/**
 * Objet PDO de connexion à la base de données
 */
        try{
            $pdo = new PDO ('mysql:host=localhost;dbname=quotes', username: 'root', password: '' );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        }catch(Exception $e){
            http_response_code(500);
            die("Probleme avec la base de données");
        }




?>