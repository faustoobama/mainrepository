<?php

class NombreApellido extends Texto{

    function isValid(){
        return preg_match('/^[a-zA-Z-ñáéíóúü]{15-50}+$/', $this->getValue());
        //si se necesita filtrar que no pongan números (?!.*[0-9])
        //no funciona metiendo las ñ y las tildes
    }

}

?>