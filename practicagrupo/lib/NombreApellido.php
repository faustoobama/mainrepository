<?php

class NombreApellido extends Texto{

    function isValid(){
        return preg_match("/^[a-zA-Z'-]+$/", $this->getValue());
    }

}

?>