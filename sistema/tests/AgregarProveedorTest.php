<?php

include 'sistema/src/AgregarProveedor.php';

use PHPUnit\Framework\TestCase;

class AgregarProveedorTest extends TestCase{

 public function testIdproveedor(){  
    $agregarProveedor = new AgregarProveedor;
    $agregarProveedor->setIdproveedor(4);
    $this->assertEquals($agregarProveedor->getIdproveedor(),4);
    }
 
 public function testNombreproveedor(){  
    $agregarProveedor = new AgregarProveedor;
    $agregarProveedor->setNombreproveedor('Masas');
    $this->assertEquals($agregarProveedor->getNombreproveedor(),'Masas');
    }

 public function testNombrecontacto(){  
    $agregarProveedor = new AgregarProveedor;
    $agregarProveedor->setNombrecontacto('Juan Guzman');
    $this->assertEquals($agregarProveedor->getNombrecontacto(),'Juan Guzman');
    }  
    
 public function testTelefono(){  
    $agregarProveedor = new AgregarProveedor;
    $agregarProveedor->setTelefono(987654321);
    $this->assertEquals($agregarProveedor->getTelefono(),987654321);
    } 
 public function testDireccion(){  
    $agregarProveedor = new AgregarProveedor;
    $agregarProveedor->setDireccion('Mz 33 Lt 440');
    $this->assertEquals($agregarProveedor->getDireccion(),'Mz 33 Lt 440');
    } 
 }
    ?>