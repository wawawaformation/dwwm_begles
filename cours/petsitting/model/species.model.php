<?php


/**
 * Composant d'accès pour les animaux
 */

require_once __DIR__ . '/pdo.php';


function findAllSpecies(PDO $pdo): array {
    $sql = 'SELECT id, species FROM species';
    $q = $pdo->query($sql);

    return $q->fetchAll();
}