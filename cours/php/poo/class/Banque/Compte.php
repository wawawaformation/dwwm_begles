<?php

namespace Banque;


use Exception;


/**
 * Représente un compte bancaire
 */
class Compte
{
    /**
     * Le solde du compte
     * @var int
     */
    protected int $solde;

    /**
     * Le nom du titulaire
     * @var string
     */
    protected string $titulaire;

    
    public function __construct(string $titulaire, int $solde)
    {
        $this->setTitulaire($titulaire);
        $this->setSolde($solde);
    }


    /**
     * deposer de l'argent sur le compte
     * @param int $montant
     * @throws \Exception
     * @return Compte
     */
    public function deposer(int $montant): self
    {
        if($montant <= 0){
            throw new Exception('le montant doit strictement être positif');
        }
        $this->setSolde($this->solde + $montant); 
        return $this;
    }


    

    /**
     * Retirer de l'argent du compte
     * @param int $montant
     * @throws \Exception
     * @return Compte
     */
    public function retirer(int $montant): self
    {
        if($montant <= 0){
            throw new Exception('le montant doit strictement être positif');
        }
        $this->setSolde($this->solde - $montant); 
        return $this;
    }




    /**
     * Virer de l'argent d'un compte à l'autre
     * @param Compte $compte
     * @param int $montant
     * @return bool
     */
    public function effectuerVirement(Compte $compte, int $montant): bool
    {
        $this->retirer($montant);
        $compte->deposer($montant);

        return true;
    }


    public function getSolde(): int
    {
        return $this->solde;
    }

    public function setSolde(int $montant): self{
        if($montant <= 0){
            throw new Exception('le montant doit strictement être positif');
        }
        $this->solde = $montant;
        return $this;
    }

    public function getTitulaire(): string
    {
        return $this->titulaire;
    }

    public function setTitulaire(string $titulaire): self
    {
        if(strlen($titulaire) <= 0){
            throw new Exception('Le nom du titulaire ne peut pas être vide');
        }
        $this->titulaire = $titulaire;
        return $this;
    }

}