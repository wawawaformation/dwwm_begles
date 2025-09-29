<?php

namespace App\Model\Entity;

class Animal
{
    private ?int $id = null;
    private ?string $nom = null;





    /**
     * retourne l'id de l'animal
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        if($this->id !== null){
            throw new \LogicException('L\'id est en lecture seule');
        }
       
        $this->id = $id;
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

    public function hydrate(array $data): self
    {
        foreach($data as $key=>$value){
            $method = 'set' . ucfirst($key);

            if(method_exists($this, $method)){
                $this->$method($value);
            }else{
                throw new \InvalidArgumentException('La propriété ' . $key . ' n\'existe pas');
            }
        }

        return $this;
    }

}