<?php

namespace Client;

/**
 * Représente un compte client
 */
class Compte
{
    private string $prenom;
    private string $nom;


    public function __construct(string $prenom, string $nom)
    {
        $this->setPrenom($prenom);
        $this->setNom($nom);
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        //en principe, on met des barriere mais osef
        $this->prenom = $prenom;
        return $this;
    }
    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom(string $nom): self
    {

        //en principe, on met des barriere mais osef
        $this->nom = $nom;
        return $this;
    }
    
}