<?php

/**
 * Représente un compte bancaire
 */
class Compte
{
    // les proriétés

    /**
     * Numéro de Compte
     * @var string
     */
    public string $numero;

    /**
     * Le solde du compte
     * @var int
     */
    public int $solde;

    // les méthodes


    /**
     * Deposer de l'argent sur le Compte
     * @param int $montant montant à déposer
     * @return void
     */
    public function deposer(int $montant): void
    {
        if($montant <= 0){
            trigger_error("Doit être strictement positif",E_USER_WARNING);
        }
        $this->solde += $montant;
    }
}