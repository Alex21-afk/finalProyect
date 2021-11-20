<?php
class RegistrarVenta {
public $idventa;
public $codigo;
public $idproducto;
public $idcliente;
public $cantidad;




public function setIdventa($idventa){
    $this->idventa=$idventa;
}
public function getIdventa(){
    return $this->idventa;
}
public function setCodigo($codigo){
    $this->codigo=$codigo;
}
public function getCodigo(){
    return $this->codigo;
}
public function setIdproducto($idproducto){
    $this->idproducto=$idproducto;
}
public function getIdproducto(){
    return $this->idproducto;
}

public function setIdcliente($idcliente){
    $this->idcliente=$idcliente;
}
public function getIdcliente(){
    return $this->idcliente;
}

public function setCantidad($cantidad){
    $this->cantidad=$cantidad;
}

public function getCantidad(){
    return $this->cantidad;
}
}
?>