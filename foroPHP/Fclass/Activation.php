<?php
class Activation {
    private $randomAccesCode;
    private $password;
    private $cpassword;

    function __construct(array $array){
        if(!empty($array)){
            $this->randomAccesCode = new inputText($array['rac']);
            $this->password = new inputPassword($array['password']);
            $this->cpassword = new inputPassword($array['cpassword']);
        }else {
            $this->randomAccesCode = new inputText($array['rac']);
            $this->password = new inputPassword($array['password']);
            $this->cpassword = new inputPassword($array['cpassword']);
        }
    }
    function getRandomAccesCode(){
        return $this->randomAccesCode;
    }
    function getPassword (){
        return $this->password;
    }
    function getCpassword (){
        return $this->cpassword;
    }
    function isValid(){
        return ($this->password->isValid() && ($this->password->getValue() == $this->cpassword->getValue()));
    }
    function getActivationForm(){
        
        return <<<EOF
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Activacion de usuario</title>
                </head>
                <body>
                <div class='elements' id='userActivation'>
                <div class='userActivationMainTitle'>Activacion de usuario</div>
                <form method='post' id='activationForm' action=''>
            EOF.
                $this->randomAccesCode->printInput('rac','text','Clave de activación').
                ((!empty($_POST))?(($this->password->isValid())?"<b class='validInput'>Valor valido</b>":" <b class='invalidInput'>Valor incorrecto</b>"):"").
                $this->password->printInput('password','password','Introduzca su contraseña').
                ((!empty($_POST))?(($this->password->isValid())?"<b class='validInput'>Valor valido</b>":" <b class='invalidInput'>Valor incorrecto</b>"):"").
                $this->cpassword->printInput('cpassword','password','Confirme su contraseña').
                ((!empty($_POST))?(($this->cpassword->isValid())?"<b class='validInput'>Valor valido</b>":" <b class='invalidInput'>Valor incorrecto</b>"):"").
            <<<EOF
                <div>
                    <input type='submit' value='Activar usuario' id='activateUser' name='activateUser'>
                </div>
                </form>
                </div>
                </body>
                </html>
            EOF;
    }
}
?>