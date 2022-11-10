<?php

class DniNif extends Texto{

    function isValid(){
        if (!is_int($this->getValue.substr[0].upperCase())){
            return preg_match('/^[XYZT][0-9][0-9][0-9][0-9][0-9][0-9][0-9][A-Z0-9]/', $this->getValue());
        }else{
            return preg_match('/^[T]{1}/', $this->getValue());     
        }
    }
}

?>