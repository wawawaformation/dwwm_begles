<?php

use Phpunit\Framework\TestCase;
use App\Model\Entity\Animal;


class AnimalTest extends TestCase
{
    function testAnimalRetourneIdEtNom(){
        $animal  = new Animal();
        $animal->setId(2);
        $animal->setNom('David');

        $this->assertSame(2, $animal->getId());
        $this->assertSame('David', $animal->getNom());
    }

    function testIdEnLectureSeule(){
        $animal  = new Animal();
        $animal->setId(2);


        $this->expectException(LogicException::class);
    
        $animal->setId(3); // on essaye de modifier l'id

    }


    function testHydrateAvecAttributInconnu()
    {
        $animal = new Animal();

        $animal->hydrate(['nom'=>'David']);

        $this->assertSame('David', $animal->getNom());

       

        $this->expectException(InvalidArgumentException::class);
        $animal->hydrate(['crie', 'Format document']);
    }
}