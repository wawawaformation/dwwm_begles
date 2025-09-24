<?php

class CompteBancaire
{
    private $titulaire;
    private $solde;


    public function __construct(string $titulaire, int $solde=500)
    {
        if($solde < 10){
            trigger_error("On aime pas les pauvres", E_USER_ERROR);
        }

        $this->setTitulaire($titulaire);
        $this->setSolde($solde);
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

        if($montant <= 0){
            trigger_error("Doit être stritement positif", E_USER_ERROR);
        }
        $nouveauMontant = $this->solde + $montant;
        $this->setSolde($nouveauMontant);
    }

    public function retirer(int $montant): void
    {
          if($montant <= 0){
            trigger_error("Doit être stritement positif", E_USER_ERROR);
        }
        $nouveauMontant = $this->solde - $montant;
        $this->setSolde($nouveauMontant);
    }


    public function faireVirement(CompteBancaire $compte, int $virement)
    {
        $this->retirer($virement);
        $compte->deposer($virement);
    }

    
}