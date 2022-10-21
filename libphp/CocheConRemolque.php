<?php

class CocheConRemolque extends Coche {

    private $capacidadRemolque;

    public function __construct($matricula="s-0000-x",$marca="LaNegra",$carga="1000kg",$capRem="1000kg"){
        parent::__construct($matricula,$marca,$carga);
        $this->capacidadRemolque = $capRem;
    }

    public function setCapacidadRemolque($matricula){$this->matricula=$matricula;}
    public function getCapacidadRemolque (){return $this->matricula;}
    public function pintarInformacion(){
        return parent::pintarInformacion()." ".$this->capacidadRemolque;
    }
}
?>