<?php


class Compte
{
    // les proriétés
    public string $numero;
    public int $solde;

    // les méthodes

    public function deposer(int $montant): void
    {
        if($montant <= 0){
            trigger_error("Doit être strictement positif",E_USER_WARNING);
        }
        $this->solde += $montant;
    }
}