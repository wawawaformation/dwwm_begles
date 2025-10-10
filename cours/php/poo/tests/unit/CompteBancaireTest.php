<?php

use PHPUnit\Framework\TestCase;
use App\Banque\Compte;
use App\Client\Compte as CompteClient;


class CompteBancaireTest extends TestCase
{
    function testConstructorWithDependencyInjection ()
    {
        $compteClient = new CompteClient('David', 'Legrand');
        $compteBancaire = new Compte($compteClient, 1000);


        $this->assertInstanceOf(Compte::class, $compteBancaire);
        $this->assertInstanceOf(CompteClient::class, $compteBancaire->getTitulaire());
        $this->assertIsInt($compteBancaire->getSolde());
        
    }


    function testDeposer()
    {
        



        $compteClient = new CompteClient('David', 'Legrand');
        $compteBancaire = new Compte($compteClient, 1000);

        $this->assertEquals(
            1500, 
            $compteBancaire
                ->deposer(500)
                ->getSolde());



        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('Esteban');
        $compteBancaire->deposer(0);
       

        
    }
       

}