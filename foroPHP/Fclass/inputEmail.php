<?php
class inputEmail extends inputText {
    function isValid(){
        return (strlen($this->getValue() > 0) && preg_match('/^\\S+@\\S+\\.\\S+$/',$this->getValue()));
    }
}
?>