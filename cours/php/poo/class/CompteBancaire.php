<?php

class CompteBancaire
{
    private $titulaire;
    private $solde;


    public function __construct(string $titulaire, int $solde=500)
    {
        $this->titulaire = $titulaire;
        $this->solde = $solde;
    }

    public function getSolde():int{
        return $this->solde;
    }
    public function getTitulaire():string{
        return $this->titulaire;
    }

    public function setSolde(int $solde)
    {
        $this->solde = $solde;
    }

    public function setTitulaire(string $titulaire): void
    {
        $this->titulaire = $titulaire;
    }

    public function deposer(int $montant): void
    {
        $nouveauMontant = $this->solde + $montant;
        $this->setSolde($nouveauMontant);
    }

    public function retirer(int $montant): void
    {
        $nouveauMontant = $this->solde - $montant;
        $this->setSolde($nouveauMontant);
    }


    public function faireVirement(CompteBancaire $compte, int $virement)
    {
        $this->retirer($virement);
        $compte->deposer($virement);
        
    }

    
}