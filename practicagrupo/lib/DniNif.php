<?php

class DniNif extends Texto{

    function isValid(){
        if (!is_int($this->getValue.substr[0].upperCase())){
            return preg_match('/^[XYZT]{1}[0-9]{7}[A-Z0-9]/', $this->getValue());
            //[XYZT]{1}[0-9]{7}[A-Z0-9]
            //[XYZT][0-9][0-9][0-9][0-9][0-9][0-9][0-9][A-Z0-9]

        }else{
            return preg_match('/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]{1}/', $this->getValue());   
        //regex para dni mirando las letras que pueden usarse para poner en realidad en los DNI
        //verificadap
        }
    }
}

?>