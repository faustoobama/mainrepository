<?php

class Coche {

    private $matricula;
    private $marca;
    private $carga;

    public function __construct($matricula="s-0000-x",$marca="LaNegra",$carga="1000kg"){
        $this->matricula = $matricula;
        $this->marca = $marca;
        $this->carga = $carga;
    }

    public function pintarInformacion(){
        return $this->marca." ".$this->matricula." ".$this->carga;
    }

    public function setMatricula ($matricula){$this->matricula=$matricula;}
    public function getMatricula (){return $this->matricula;}
    public function setmarca ($marca){$this->marca=$marca;}
    public function getMarca (){return $this->marca;}
    public function setCarga ($carga){$this->carga=$carga;}
    public function getCarga (){return $this->carga;}
}
?>