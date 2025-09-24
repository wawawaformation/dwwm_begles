<?php

class Personnage
{
    private string $nom;
    private int $pv = 100;
    private int $force;
    private int $xp = 0;




    public function __construct(string $nom, int $force)
    {
        $this->setNom($nom);
        $this->setForce($force);
    }


    private function gagnerExperience(): void
    {
        $this->xp++;

        // à cent on change de niveau
    }

    public function regenerPv(): void
    {
        $this->setPv(100);
    }


    public function hurler(): string
    {
        return 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAHHHHHHHHHH';
    }


    public function frapper(Personnage $personnage): string
    {

        if($personnage === $this){
            $msg = 'C moi-même <br>';
            return $msg;
        }

        $pv = $personnage->getPv() - $this->getForce();
        $personnage->setPv($pv);

        $this->gagnerExperience();

        if($personnage->getPv() > 0){
            $msg = $personnage->getNom() . ' a survécu avec ' . $personnage->getPv();

        }else{
            $msg = $personnage->getNom() .' est ko :-(';
        }

        return $msg . '<br>';
    }


    public function getNom(): string
    {
        return $this->nom;

    }

    public function setNom(string $nom): void
    {
        if(strlen($nom) === 0){
            throw new Exception('Le nom ne doit pas être vide', 127);
        }

        $this->nom = $nom;
    }


    public function getPv () : int
    {
        return $this->pv;
    }

    public function setPv ($pv): void
    {
        $this->pv = $pv;
    }


    public function getForce(): int
    {
        return $this->force;
    }

    public function setForce(int $force): void
    {
        if($force < 1 || $force > 100){
            throw new Exception('La force doit être entre 1 et 100', 128);
        }
        $this->force = $force;
    }

    public function getXp(): int
    {
        return $this->xp;
    }

    public function setXp(int $xp): void
    {
        $this->xp = $xp;
    }

}