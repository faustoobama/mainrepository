<?php
class textarea {
    private $value;
    function __construct($value=''){
        $this->value = $this->filter($value);
    }
    function getValue(){
        return $this->value;
    }
    function isValid(){
        return (strlen($this->getValue() > 0) && preg_match('/^[a-z \s+ 0-9áéíóúäëïöü()]/i',$this->getValue()));
    }
    function filter($value){
        return htmlspecialchars(stripcslashes(trim($value)));
    }
    function printInput($name,$type,$placeholder){
        return (<<<EOF
                <div>
                    <label for='$name' class='loginLabels'>$placeholder</label>
                    <textarea value='$this->value' name='$name' id='$name' class='textareaClass'></textarea>
                </div>
                EOF);
    }
}
?>