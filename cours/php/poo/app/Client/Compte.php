<?php

namespace App\Client;

class Compte
{

    /**
     * Le nom du client
     * @var string
     */
    private string $nom;

    /**
     * Le prénom du client
     * @var string
     */
    private string $prenom;



    public function __construct(string $prenom, string $nom)
    {
        if(strlen($nom) <= 0 || strlen($prenom) <= 0) {
            throw new \InvalidArgumentException('Le nom et le prénom ne peuvent pas être vides');
        }
        $this->setNom($nom);
        $this->setPrenom($prenom);
    }


    /**
     * retourne le nom du client
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }


    /**
     * retourne le prénom du client
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Modifier le nom du client
     * @param string $nom le nom du client
     * @return Compte
     */
    public function setNom(string $nom): self
    {

        if(strlen($nom) <= 0) {
            throw new \InvalidArgumentException('Le nom ne peut pas être vide');
        }
        $this->nom = $nom;
        return $this;
    }


    /**
     * Modifier le prénom du client
     * @param string $prenom le prénom du client
     * @return Compte
     */
    public function setPrenom(string $prenom): self
    {
        if(strlen($prenom) <= 0) {
            throw new \InvalidArgumentException('Le prénom ne peut pas être vide');
        }

        $this->prenom = $prenom;
        return $this;
    }


    public function __toString(): string
    {
        return $this->prenom . ' ' . $this->nom;
    }

}