<?php
class signinFormClass {
    private $name;
    private $email;

    function __construct(array $array){
        if(!empty($array)){
            $this->name = new inputText($array['newname']);
            $this->email = new inputEmail($array['newemail']);
            $this->password = new inputPassword($array['newpassword']);
            $this->cpassword = new inputPassword($array['newcpassword']);
        }else {
            $this->name = new inputText();
            $this->email = new inputEmail();
            $this->password = new inputPassword();
            $this->cpassword = new inputPassword();
        }
    }
    function getName (){
        return $this->name;
    }
    function getEmail (){
        return $this->email;
    }

    function isValid(){
        return ($this->name->isValid() && $this->email->isValid());
    }
    function getSigninPage(){
        if(empty($_POST)){
            return json_encode(<<<EOF
                        <div class='elements' id='signinCont'>
                        <div class='loginSigninMainTitle'>REGISTRO DE USUARIO</div>
                        <form method='post' id='signinForm'>
                    EOF.
                        $this->name->printInput('newname','text','Nombre').
                        $this->email->printInput('newemail','email','Correo electronico').
                    <<<EOF
                        <div>
                            <input type='submit' value='Registrarse' id='signInButton' name='signInButton'>
                        </div>
                        </form>
                        </div>
                    EOF);
        }else {
            return json_encode(<<<EOF
                        <div class='elements' id='signinCont'>
                        <div class='loginSigninMainTitle'>REGISTRO DE USUARIO</div>
                        <form method='post' id='signinForm'><p class='notAut'>Valores incorrectos<p>
                    EOF.
                        $this->name->printInput('newname','text','Nombre').
                        $this->email->printInput('newemail','email','Correo electronico').
                    <<<EOF
                        <div>
                            <input type='submit' value='Registrarse' id='signInButton' name='signInButton'>
                        </div>
                        </form>
                        </div>
                    EOF);
        }
    }
}
?>