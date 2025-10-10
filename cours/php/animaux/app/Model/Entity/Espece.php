<?php

namespace App\Model\Entity;


/**
 * Represente la table Espece
 */
class Espece extends AbstractEntity{

    /**
     * Le nom de l'espèce
     * @var string|null
     */
    private ?string $espece = null; 


    


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