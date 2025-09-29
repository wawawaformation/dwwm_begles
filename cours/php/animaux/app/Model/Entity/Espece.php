<?php

namespace App\Model\Entity;


/**
 * Represente la table Espece
 */
class Espece{


    /**
     * La clé primaire de la table Espece
     * @var 
     */
    private ?int $id = null;

    /**
     * Le nom de l'espèce
     * @var string|null
     */
    private ?string $espece = null; 


    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    public function getEspece(): ?string
    {
        return $this->espece;
    }
    public function setEspece(?string $espece): self
    {
        $this->espece = $espece;
        return $this;
    }

}