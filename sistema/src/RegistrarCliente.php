<?php
class RegistrarCliente {
public $idcliente;
public $dni;
public $nombre;
public $telefono;
public $direccion;


public function setIdcliente($idcliente){
    $this->idcliente=$idcliente;
}

public function getIdcliente(){
    return $this->idcliente;
}

public function setDni($dni){
    $this->dni=$dni;
}

public function getDni(){
    return $this->dni;
}

public function setNombre($nombre){
    $this->nombre=$nombre;
}

public function getNombre(){
    return $this->nombre;
}

public function setTelefono($telefono){
    $this->telefono=$telefono;
}

public function getTelefono(){
    return $this->telefono;
}

public function setDireccion($direccion){
    $this->direccion=$direccion;
}

public function getDireccion(){
    return $this->direccion;
}
}
?>