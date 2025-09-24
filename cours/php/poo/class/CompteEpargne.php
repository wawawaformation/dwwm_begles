<?php

require_once __DIR__ . '/Compte.php';


class CompteEpargne extends Compte
{
    protected static $tauxInteret = 1.03;


    public static function changerTaux($taux)
    {
        self::$tauxInteret = $taux;
    }

    public function verserTaux():self
    {
        $this->solde = $this->solde * self::$tauxInteret;
        return $this;
    }

}