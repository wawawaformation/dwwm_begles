<?php

use PHPunit\Framework\TestCase;
use App\Client\Compte;

class CompteClientTest extends TestCase
{
    function testObjectHasAttributes()
    {
        $compteClient = new Compte('Jean', 'Dupont');

        $this->assertObjectHasProperty('nom', $compteClient);
        $this->assertObjectHasProperty('prenom',$compteClient);
    }

    function testSetterAndGetterOk()
    {
        $compteClient = new Compte('Jean', 'Dupont');

         $this->assertIsString($compteClient->getNom());
        $compteClient->setNom('Legrand');
        $compteClient->setPrenom('David');

        $this->assertEquals('Legrand', $compteClient->getNom());
        $this->assertEquals('David', $compteClient->getPrenom());


        // nom et prenom sont ne peuvent pas être vides

        $this->expectException(\InvalidArgumentException::class);
        $compteClient->setNom('');
        $compteClient->setPrenom('');
    }


    function testConstructor()
    {
        $compteClient = new Compte('Maryon', 'Mouhel');


         $this->assertIsString($compteClient->getNom());
        $this->assertIsString($compteClient->getPrenom());
    
        $this->assertEquals('Maryon', $compteClient->getPrenom());
        $this->assertEquals('Mouhel', $compteClient->getNom());

        $this->expectException(\InvalidArgumentException::class);
        $compteClient = new Compte('', '');
    }
       
}