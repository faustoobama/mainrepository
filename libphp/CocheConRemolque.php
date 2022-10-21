<?php

require('Coche.php');

class CocheConRemolque extends Coche {

    private $capacidadRemolque;

    public function setCapacidadRemolque($matricula){$this->matricula=$matricula;}
    public function getCapacidadRemolque (){return $this->matricula;}
}
?>