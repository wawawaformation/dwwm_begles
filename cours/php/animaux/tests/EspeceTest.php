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

    function testIdEnLectureSeule(){
        $chien  = new Espece();
        $chien->setId(2);


        $this->expectException(LogicException::class);
    
        $chien->setId(3); // on essaye de modifier l'id

    }
}