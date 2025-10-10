<?php

declare(strict_types=1);

namespace App\Banque;

use App\Client\Compte as CompteClient;
use LogicException;

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



    public function deposer(int $montant): self
    {

        if ($montant <= 0) {
            throw new LogicException('Esteban');
        }
        $this->setSolde($this->solde + $montant);
        return $this;
    }

    /**
     * retourne le solde du compte
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
