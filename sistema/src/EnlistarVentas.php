<?php

class EnlistarVentas {
public $idenlistar;
public $fecha;
public $total;


public function setIdenlistar($idenlistar){
    $this->$idenlistar=$idenlistar;
}
public function getIdenlistar(){
    return $this->idenlistar;
}

public function setFecha($fecha){
    $this->$fecha=$fecha;
}
public function getFecha(){
    return $this->fecha;
}

public function setTotal($total){
    $this->$total=$total;
}
public function getTotal(){
    return $this->total;
}
}
?>