<?php

/**
 * Représente un compte bancaire
 */
class Compte
{

    /**
     * Numéro de Compte
     * @var string
     */
    private ?string $numero =null;

    /**
     * Le solde du compte
     * @var int
     */
    private int $solde;

    


    /**
     * REtourne le solde
     * @return void
     */
    public function getSolde(): int{
        return $this->solde;
    }


    /**
     * Modifie le solde
     * @param int $solde le nouveau solde
     * @return void
     */
    public function setSolde(int $nouveauSolde): void
    {
        $this->solde = $nouveauSolde;
    }



    /**
     * retourne le numero de compte
     * @return void
     */
    public function getNumero(): string
    {
        return $this->numero;
    }

    /**
     * Initialise le numero de compte. Ne peut etre initialisé qu'une fois
     * @return void
     */
    public function setNumero(string $nouveauNumero): void{

        $this->numero = $nouveauNumero;
    }





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