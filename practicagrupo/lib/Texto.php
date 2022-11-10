<?php

abstract class Texto{
    private $value;

    function __construct($valor){
        $this->value = $valor;
    }
    abstract protected function isValid();

    function getValue(){
        return $this->value;
    }
}

?>