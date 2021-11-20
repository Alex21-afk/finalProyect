<?php
class AgregarProveedor {
public $idproveedor;
public $nombreproveedor;
public $nombrecontacto;
public $telefono;
public $direccion; 


public function setIdproveedor($idproveedor){
    $this->idproveedor=$idproveedor;
}

public function getIdproveedor(){
    return $this->idproveedor;
}

public function setNombreproveedor($nombreproveedor){
    $this->nombreproveedor=$nombreproveedor;
}

public function getNombreproveedor(){
    return $this->nombreproveedor;
}


public function setNombrecontacto($nombrecontacto){
    $this->nombrecontacto=$nombrecontacto;
}

public function getNombrecontacto(){
    return $this->nombrecontacto;
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