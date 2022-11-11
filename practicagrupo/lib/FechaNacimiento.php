<?php

class FechaNacimiento extends Texto{

    function isValid(){
        return (intval($this->getValue().explode("/")[2]) < 2004);
      
    }

}

?>