<?php

namespace App\Utils;
class Math
{
    const PI = 3.1415;
    const E = 2.71;

    public static function abs(float $nombre): float
    {
        if($nombre < 0){
            return -1 * $nombre;
        }

        return $nombre;
    }
}