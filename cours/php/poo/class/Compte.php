<?php

/**
 * Représente un compte bancaire
 */
class Compte
{
    /**
     * Le solde du compte
     * @var int
     */
    private int $solde;

    /**
     * Le nom du titulaire
     * @var string
     */
    private string $titulaire;



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