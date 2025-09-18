<?php


/**
 * Composant d'accès pour les animaux
 */

require_once __DIR__ . '/pdo.php';



/**
 * REnvoie la liste de toutes les espèces
 * @param PDO $pdo
 * @return array
 */
function findAllSpecies(PDO $pdo): array {
    $sql = 'SELECT id, species FROM species';
    $q = $pdo->query($sql);

    return $q->fetchAll();
}



/**
 * Ajouter une espèce
 * @param PDO $pdo
 * @param string $species especes à ajouter
 * @return bool
 */
function addSpecies(PDO $pdo, string $species): bool {
    $sql = 'INSERT INTO species (species) VALUES (:species)';
    $q = $pdo->prepare($sql);
    $q->bindValue(':species', $species, PDO::PARAM_STR);
    return $q->execute();
}