<?php

require_once __DIR__ . '/Compte.php';

class CompteCourant extends Compte
{
    private int $decouvertAutorise = 0;


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
        if( $montant < $this->decouvertAutorise){ // Ca s'est faux !!!!!!!!!!!!!!
            throw new Exception('Pas le droit de dépense plus');
        } 
        $this->solde = $montant;
        return $this;
    }


}