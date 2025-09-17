<?php

/**
 * Fonctions utilitaires
 */


/**
 * Affiche un tableau correctement
 * @param mixed $array
 * @return void
 */
function pre_print_r($array): void
{
    echo '<pre>';
    print_r($array);
    echo '<pre>';
}