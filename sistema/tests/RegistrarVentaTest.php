<?php
include 'sistema/src/RegistrarVenta.php';

use PHPUnit\Framework\TestCase;

class RegistrarVentaTest extends TestCase{

    public function testIdventa(){  
    $registrarVenta = new RegistrarVenta;
    $registrarVenta->setIdventa(5);
    $this->assertEquals($registrarVenta->getIdventa(),5);
    }
    public function testCodigo(){  
    $registrarVenta = new RegistrarVenta;
    $registrarVenta->setCodigo('343');
    $this->assertEquals($registrarVenta->getCodigo(),'343');
    }
    public function testIdproducto(){  
    $registrarVenta = new RegistrarVenta;
    $registrarVenta->setIdproducto(3);
    $this->assertEquals($registrarVenta->getIdproducto(),3);
    }       
    public function testIdcliente(){  
    $registrarVenta = new RegistrarVenta;
    $registrarVenta->setIdcliente(3);
    $this->assertEquals($registrarVenta->getIdcliente(),3);
    }       
    public function testCantidad(){  
    $registrarVenta = new RegistrarVenta;
    $registrarVenta->setCantidad(40);
    $this->assertEquals($registrarVenta->getCantidad(),40);
    }          
  }
?>