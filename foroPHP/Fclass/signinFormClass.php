<?php
class signinFormClass {
    use Layout;
    private $name;
    private $email;

    function __construct(array $array){
        if(!empty($array)){
            $this->name = new inputText($array['newname']);
            $this->email = new inputEmail($array['newemail']);
        }else {
            $this->name = new inputText();
            $this->email = new inputEmail();
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
    function getSigninPage($bool=true){
        if($bool){
            if(empty($_POST)){
                return (<<<EOF
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
                return (<<<EOF
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
        }else {
            return (<<<EOF
                            <div class='elements' id='signinCont'>
                            <div class='loginSigninMainTitle'>REGISTRO DE USUARIO</div>
                            <form method='post' id='signinForm'><p class='notAut'>Dirección de correo electrónico ya existente<p>
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
    function getSuccesfullSign(){
        
            return <<<EOF
                <div class='signSuccesfullBanner'>
                    <h1>Registro llevado a cabo de forma satisfactoria.</h1> 
                    <p class='signSuccessfull'>
                        Pronto recibirá un correo con el enlace de acceso a la sección de activación de usuario y su correspondiente clave,
                        para finalizar con el proceso de alta. 
                        Revise su bandeja de correos, copie la clave y acceda al enlace.
                    </p>
                </div>
            EOF;
    }
}
?>
