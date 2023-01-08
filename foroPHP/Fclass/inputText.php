<?php
class inputText {
    private $value;
    function __construct($value=''){
        $this->value = $this->filter($value);
    }
    function getValue(){
        return $this->value;
    }
    function isValid(){
        return (strlen($this->getValue() > 0) && preg_match('/^[a-z 0-9áéíóúäëïöü]{2,255}$/',$this->getValue()));
    }
    function filter($value){
        return htmlspecialchars(stripcslashes(trim($value)));
    }
    function printInput($name,$type,$placeholder){
        return (<<<EOF
                <div>
                    <label for='$name' class='loginLabels'>$placeholder</label>
                    <input type='$type' value='$this->value'name='$name' id='$name' class='loginInputs'>
                </div>
                EOF);
    }
}
?>