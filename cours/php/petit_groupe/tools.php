<?php
/**
 * Functions utilitaires permettant de débugger
 */


/**
 * Ce que fait la function
 * @param array $array le tableau à debugguer
 * @return void
 */
function pre_print_r(array $array): void{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
