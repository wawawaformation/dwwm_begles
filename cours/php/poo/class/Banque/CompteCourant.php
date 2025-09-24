<?php
namespace Banque;


require_once __DIR__ . '/Compte.php';

class CompteCourant extends Compte
{
    private int $decouvertAutorise = 0;


    /**
     * Summary of __construct
     * @param string $titulaire le titulaire du compte
     * @param int $solde le solde initial
     * @param int $decouvert le découvert autorisé
     */
    public function __construct(string $titulaire, int $solde, int $decouvert)
    {
        parent::__construct($titulaire, $solde);
        $this->setDecouvertAutorise($decouvert);
    }

    public function getDecouvertAutorise(): int
    {
        return $this->decouvertAutorise;
    }

    public function setDecouvertAutorise(int $decouvert): self
    {

        //en principe, on met des barriere mais osef
        $this->decouvertAutorise = $decouvert;
        return $this;
    }

    public function setSolde(int $montant): self
    {
        if( $montant < -1 * $this->decouvertAutorise){ 
            throw new Exception('Pas le droit de dépense plus');
        } 
        $this->solde = $montant;
        return $this;
    }
}