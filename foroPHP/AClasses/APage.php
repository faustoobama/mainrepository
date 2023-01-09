<?php
abstract class APage {
    private $data;
    function __construct($data=''){
        $this->data = $data;
    }
    function getData(){
        return $this->data;
    }
    abstract function getPage();
}

?>