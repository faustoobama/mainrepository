<?php
class inputPassword extends inputText {
    function isValid(){
        return (strlen($this->getValue() > 0) && preg_match('/^[a-zA-Z 0-9_áéíóúäëïöü]{0,25}$/',$this->getValue()));
    }
}
?>