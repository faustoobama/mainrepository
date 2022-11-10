<?php

class Telefono extends Texto{

    function isValid(){
        // return preg_match('/^[^0-9]{6}$/', $this->getValue());
        return (strlen($this->getValue()) == 9  && preg_match('/^[^0-9]{9}$/', $this->getValue()));

    }
}

?>