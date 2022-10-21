<?php

class CocheGrua extends Coche {

    private $cocheCargado;
    private $carga;

    public function __construct($matricula="s-0000-x",$marca="LaNegra",$carga="1000kg",/*$cocheCargado=false*/){
        parent::__construct($matricula,$marca,$carga);
        $this->cocheCargado = false;
    }

    public function setCocheCargado($value){$this->cocheCargado=$value;}
    public function getCocheCargado (){return $this->cocheCargado;}
    public function pintarInformacion(){
        return parent::pintarInformacion()." ".(($this->cocheCargado)?"Grua cargada con: ":"Grua libre");
    }

    public function cargar(Coche $carga){
        $this->carga = $carga;
        $this->setCocheCargado(true);
    }
    public function descargar(Coche $carga){
        $this->carga = null;
        $this->setCocheCargado(true);
    }
    public function getCarga (){
        return $this->carga->pintarInformacion();
    }
}
?>