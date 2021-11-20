<?php
include 'sistema/src/EnlistarVentas.php';

use PHPUnit\Framework\TestCase;

class EnlistarVentasTest extends TestCase{

    public function testIdenlistar(){  
    $enlistarVentas = new EnlistarVentas;
    $array = [$enlistarVentas-> idenlistar = 1, $enlistarVentas-> fecha ='23/03/2014', $enlistarVentas-> total = 500];
    $this->assertIsArray($array);
    }
}

?>