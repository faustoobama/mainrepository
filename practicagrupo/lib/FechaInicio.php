<?php

class FechaInicio extends Texto{

    private $now;

    function __construct($value){
        parent::__construct($value);
        $now = strval(date('d.m.Y'));
    }

    function isValid(){
        return (intval($this->getValue().explode("/")[0]) >= ($now.explode('/')[0]) + 7);
    }

}

?>