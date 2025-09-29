<?php

namespace App\Model\Entity;

class Animal extends AbstractEntity
{

    private ?string $nom = null;

    private ?int $espece_id = null;

    public function getEspece_id(): ?int
    {
        return $this->espece_id;
    }

    public function setEspece_id(?int $espece_id = null): self
    {
        $this->espece_id = $espece_id;
        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

   

}