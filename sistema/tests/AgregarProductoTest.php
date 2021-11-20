<?php

include 'sistema/src/AgregarProducto.php';

use PHPUnit\Framework\TestCase;

class AgregarProductoTest extends TestCase{

  public function testIdproducto(){  
    $agregarProducto = new AgregarProducto;
    $agregarProducto->setIdproducto(21);
    $this->assertEquals($agregarProducto->getIdproducto(),21);
    }
    
  public function testCodigo(){
    $agregarProducto = new AgregarProducto;
    $agregarProducto->setCodigo('AMERICANA');
    $this->assertEquals($agregarProducto->getCodigo(),'AMERICANA');
   }
   
  public function testDescripcion(){
    $agregarProducto = new AgregarProducto;
    $agregarProducto->setDescripcion('Pizza de alta gama');
    $this->assertEquals($agregarProducto->getDescripcion(),'Pizza de alta gama');
    }

  public function testIdproveerdor(){
    $agregarProducto = new AgregarProducto;
    $agregarProducto->setIdproveerdor(3);
    $this->assertEquals($agregarProducto->getIdproveerdor(),3);
    }
  
  public function testPrecio(){
    $agregarProducto = new AgregarProducto;
    $agregarProducto->setPrecio(25);
    $this->assertEquals($agregarProducto->getPrecio(),25);
    }
  public function testExistencia(){
    $agregarProducto = new AgregarProducto;
    $agregarProducto->setExistencia(25);
    $this->assertEquals($agregarProducto->getExistencia(),25);
    }
  }
    ?>