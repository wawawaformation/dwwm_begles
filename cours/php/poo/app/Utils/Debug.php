<?php


namespace App\Utils;
class Debug
{

    /**
     * Affiche correctement un tableau
     * @param array $array
     * @return void
     */
    public static function print_r(array $array): void{
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }


    /**
     * Affiche correctement une variable
     * @param mixed $var
     * @return void
     */
    public static function dump(mixed $var): void
    { 
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }


    /**
     * Affiche correctement une variable et meurt
     * @param mixed $var
     * @return never
     */
    public static function dd(mixed $var): void
    {
        self::dump($var);
        die;
    }
}

