<?php

class Texto{
    private $value;

    function __construct($valor){
        $this->value = $valor;
    }

    function getValue(){
        return $this->value;
    }
}

?>