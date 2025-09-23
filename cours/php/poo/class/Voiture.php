<?php

class Voiture{
    private string $modele;
    private string $couleur;
    private int $vitesse = 0;
    private int $degat = 0;
    


    //setter et getter
    //asseceur et mutateur


    public function __construct(string $modele, string $couleur)
    {
        $this->setModele($modele);
        $this->setCouleur($couleur);
    }
    public function getModele(): string
    {
        return $this->modele;
    }
    public function setModele(string $modele): void
    {
        if(strlen($modele) < 1){
            throw new Exception("Le modèle est obligatoire");
        }
        $this->modele = $modele;
    }
    public function getCouleur(): string
    {
        return $this->couleur;
    }
    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }
    public function getVitesse(): int
    {
        return $this->vitesse;
    }
    public function setVitesse(int $vitesse): void
    {
        if($vitesse < 0){
            $vitesse = 0;
        }
        $this->vitesse = $vitesse;
    }

    public function getDegat(): int
    {
        return $this->degat;
    }
    public function setDegat(int $degat): void
    {
        if($degat < 0){
            $degat = 0;
        }
        $this->degat = $degat;
    }
    public function accelerer(): void
    {
        $this->setVitesse($this->vitesse + 5);
    }

    public function freiner(): void
    {
        $this->setVitesse(0);
    }

    public function ralentir(): void{
        $this->setVitesse($this->vitesse - 5);
    }

    public function emboutir(Voiture $voiture): void
    {
        $this->setDegat($this->vitesse);
        $voiture->setDegat(2*$this->vitesse);
    }


    public function insulter(Voiture $voiture, string $insulte): string
    {
        return 'toi' . $voiture->getModele() .', '. $insulte;  
    }

}
