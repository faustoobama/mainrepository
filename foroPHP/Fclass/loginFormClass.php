<?php
class loginFormClass {
    private $email;
    private $password;
    function __construct(array $array){
        if(!empty($array)){
            $this->email = new inputEmail($array['email']);
            $this->password = new inputPassword($array['password']);
        }else {
            $this->email = new inputEmail();
            $this->password = new inputPassword();
        }
    }
    function getEmail(){
        return $this->email;
    }
    function getPassword (){
        return $this->password;
    }
    function isValid(){
        return ($this->email->isValid() && $this->password->isValid());
    }
    function getLoginPage($var=''){
        if($var == 'disabled') {
                return json_encode(<<<EOF
                        <div class='elements' id='loginCont'>
                        <div class='loginSigninMainTitle'>INICIO DE SESION</div>
                        <form method='post' id='loginForm'>
                        <b class='notAut'>Usuario deshabilitado. Contacte con el administrador del sitio.</b>
                    EOF.
                        $this->email->printInput('email','email','Correo electronico').
                        ((!empty($_POST))?(($this->email->isValid())?"<b class='validInput'>Valor valido</b>":" <b class='invalidInput'>Valor incorrecto</b>"):"").
                        $this->password->printInput('password','password','Contraseña').
                        ((!empty($_POST))?(($this->password->isValid())?"<b class='validInput'>Valor valido</b>":" <b class='invalidInput'>Valor incorrecto</b>"):"").
                    <<<EOF
                        <div>
                            <input type='submit' value='Iniciar sesion' id='sendCredentials' name='sendCredentials'>
                        </div>
                        </form>
                        </div>
                    EOF);
        }else if($var == 'unauthorized') {
                return json_encode(<<<EOF
                        <div class='elements' id='loginCont'>
                        <div class='loginSigninMainTitle'>INICIO DE SESION</div>
                        <form method='post' id='loginForm'>
                        <b class='notAut'>Credenciales incorrectas</b>
                    EOF.
                        $this->email->printInput('email','email','Correo electronico').
                        $this->password->printInput('password','password','Contraseña').
                    <<<EOF
                        <div>
                            <input type='submit' value='Iniciar sesion' id='sendCredentials' name='sendCredentials'>
                        </div>
                        </form>
                        </div>
                    EOF);
        }else if($var == 'inactive') {
            return json_encode(<<<EOF
                    <div class='elements' id='loginCont'>
                    <div class='loginSigninMainTitle'>INICIO DE SESION</div>
                    <form method='post' id='loginForm'>
                    <b class='notAut'>Usuario inactivo. <br> Debe acceder a su buzon de correo y activar el usuario mediante el enlace anteriormente facilitado.</b>
                EOF.
                    $this->email->printInput('email','email','Correo electronico').
                    $this->password->printInput('password','password','Contraseña').
                <<<EOF
                    <div>
                        <input type='submit' value='Iniciar sesion' id='sendCredentials' name='sendCredentials'>
                    </div>
                    </form>
                    </div>
                EOF);
        }else {
                return json_encode(<<<EOF
                            <div class='elements' id='loginCont'>
                            <div class='loginSigninMainTitle'>INICIO DE SESION</div>
                            <form method='post' id='loginForm'>
                        EOF.
                            $this->email->printInput('email','email','Correo electronico').
                            ((!empty($_POST))?(($this->email->isValid())?"<b class='validInput'>Valor valido</b>":" <b class='invalidInput'>Valor incorrecto</b>"):"").
                            $this->password->printInput('password','password','Contraseña').
                            ((!empty($_POST))?(($this->password->isValid())?"<b class='validInput'>Valor valido</b>":" <b class='invalidInput'>Valor incorrecto</b>"):"").
                        <<<EOF
                            <div>
                                <input type='submit' value='Iniciar sesion' id='sendCredentials' name='sendCredentials'>
                            </div>
                            </form>
                            </div>
                        EOF);
            }
        }
}
?>