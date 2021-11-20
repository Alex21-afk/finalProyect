<?php

class AgregarProducto {
public $idproducto;
public $codigo;
public $descripcion;
public $idproveerdor;
public $precio;
public $existencia;

public function setIdproducto($idproducto){
    $this->idproducto=$idproducto;
}

public function getIdproducto(){
    return $this->idproducto;
}

public function setCodigo($codigo){
    $this->codigo=$codigo;
}

public function getCodigo(){
    return $this->codigo;
}

public function setDescripcion($descripcion){
    $this->descripcion=$descripcion;
}

public function getDescripcion(){
    return $this->descripcion;
}

public function setIdproveerdor($proveerdor){
    $this->proveerdor=$proveerdor;
}

public function getIdproveerdor(){
    return $this->proveerdor;
}


public function setPrecio($precio){
    $this->precio=$precio;
}

public function getPrecio(){
    return $this->precio;
}

public function setExistencia($existencia){
    $this->existencia=$existencia;
}

public function getExistencia(){
    return $this->existencia;
}
}
?>