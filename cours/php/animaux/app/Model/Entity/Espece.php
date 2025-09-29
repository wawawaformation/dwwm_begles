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


    /**
     * Retourne l'id de l'espèce
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Modifie l'id de l'espèce
     * @param int $id
     * @return self
     */
    public function setId(int $id): self
    {
        if($this->id !== null){
            throw new \LogicException("L'id est en lecture seule");
        }
        $this->id = $id;
        return $this;
    }

    /**
     * Retourne le nom de l'espèce
     * @return string|null
     */
    public function getEspece(): ?string
    {
        return $this->espece;
    }

    /**
     * Modifie le nom de l'espèce
     * @param string|null $espece
     * @return self
     */
    public function setEspece(?string $espece): self
    {
        $this->espece = $espece;
        return $this;
    }

}