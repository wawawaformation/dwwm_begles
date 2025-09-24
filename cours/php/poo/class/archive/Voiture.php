<?php

class Voiture{
    private string $modele;
    private string $couleur;
    private int $vitesse = 0;
    private int $degat = 0;


    public static $nombre = 0;
    


    //setter et getter
    //asseceur et mutateur


    public function __construct(string $modele, string $couleur)
    {
        $this->setModele($modele);
        $this->setCouleur($couleur);

        self::$nombre++;
    }
    public function getModele(): string
    {
        return $this->modele;
    }
    public function setModele(string $modele): self
    {
        if(strlen($modele) < 1){
            throw new Exception("Le modèle est obligatoire");
        }
        $this->modele = $modele;
        return $this;
    }
    public function getCouleur(): string
    {
        return $this->couleur;
    }
    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;
        return $this;
    }
    public function getVitesse(): int
    {
        return $this->vitesse;
    }
    public function setVitesse(int $vitesse): self
    {
        if($vitesse < 0){
            $vitesse = 0;
        }
        $this->vitesse = $vitesse;
        return $this;
    }

    public function getDegat(): int
    {
        return $this->degat;
    }
    public function setDegat(int $degat): self
    {
        if($degat < 0){
            $degat = 0;
        }
        $this->degat = $degat;
        return $this;
    }
    public function accelerer(): self
    {
        $this->setVitesse($this->vitesse + 5);
        return $this;
    }

    public function freiner(): self
    {
        $this->setVitesse(0);
        return $this;
    }

    public function ralentir(): self
    {
        $this->setVitesse($this->vitesse - 5);
        return $this;
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

    public static function nombreDeVoiture(): int
    {
        return self::$nombre;
    } 

}
