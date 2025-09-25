<?php

namespace App\Banque;

use App\Client\Compte as CompteClient;



/**
 * Représente un compte bancaire
 */
class Compte
{

    /**
     * Titulaire du compte
     * @var CompteClient
     */
    protected CompteClient $titulaire;
    

    /**
     * Solde du compte
     * @var int
     */
    protected int $solde;


    public function __construct(CompteClient $titulaire, int $solde)
    {
        $this->setSolde($solde);
        $this->setTitulaire($titulaire);
    }

    /**
     * retourne le solde du compteœ
     * @return int
     */
    public function getSolde(): int
    {
        return $this->solde;
    }

    /**
     * REtourne le titulaire
     * @return CompteClient
     */
    public function getTitulaire(): CompteClient
    {
        return $this->titulaire;
    }


    /**
     * Modifie le solde
     * @param int $solde solde du compte
     * @return Compte
     */
    public function setSolde(int $solde): self
    {
        $this->solde = $solde;
        return $this;
    }


    /**
     * Modifie le titulaire
     * @param \App\Client\Compte $titulaire
     * @return Compte
     */
    public function setTitulaire(CompteClient $titulaire): self
    {
        $this->titulaire = $titulaire;
        return $this;
    }

}