<?php
    class CommentFormClass {
        private $value;
        function __construct(array $array){
            $this->value = new textarea($array['commentField']);
        }
        function getData(){
            return $this->value;
        }
        function isValid(){
            return $this->value->isValid();
        }
    }
?>