<?php

use PHPUnit\Framework\TestCase;
use App\Banque\Compte;
use App\Client\Compte as CompteClient;


class CompteBancaireTest extends TestCase
{
    function testConstructorWithDependencyInjection()
    {
        $compteClient = new CompteClient('David', 'Legrand');
        $compteBancaire = new Compte($compteClient, 1000);


        $this->assertInstanceOf(Compte::class, $compteBancaire);
        $this->assertInstanceOf(CompteClient::class, $compteBancaire->getTitulaire());
        $this->assertIsInt($compteBancaire->getSolde());
        
    }
       

}