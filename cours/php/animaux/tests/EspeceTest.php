<?php

use Phpunit\Framework\TestCase;
use App\Model\Entity\Espece;


class EspeceTest extends TestCase
{
    function testEspeceRetourneIdEtEspece(){
        $chien  = new Espece();
        $chien->setId(2);
        $chien->setEspece('chien');

        $this->assertSame(2, $chien->getId());
        $this->assertSame('chien', $chien->getEspece());
    }
}