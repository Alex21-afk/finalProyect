<?php
include 'sistema/src/RegistrarCliente.php';

use PHPUnit\Framework\TestCase;

class RegistrarClienteTest extends TestCase{

    public function testIdcliente(){  
    $registrarCliente = new RegistrarCliente;
    $registrarCliente->setIdcliente(5);
    $this->assertEquals($registrarCliente->getIdcliente(),5);
    }
    public function testDni(){  
    $registrarCliente = new RegistrarCliente;
    $registrarCliente->setDni(75838937);
    $this->assertEquals($registrarCliente->getDni(),75838937);
    }    
  
    public function testNombre(){  
    $registrarCliente = new RegistrarCliente;
    $registrarCliente->setNombre('Alexander Piera');
    $this->assertEquals($registrarCliente->getNombre(),'Alexander Piera');
    } 
    
    public function testTelefono(){  
    $registrarCliente = new RegistrarCliente;
    $registrarCliente->setTelefono(975285225);
    $this->assertEquals($registrarCliente->getTelefono(),975285225);
    }   

    public function testDireccion(){  
    $registrarCliente = new RegistrarCliente;
    $registrarCliente->setDireccion('Mz 44 Lt33');
    $this->assertEquals($registrarCliente->getDireccion(),'Mz 44 Lt33');
    }   
    
  }
?>