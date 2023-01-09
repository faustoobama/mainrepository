<?php
require('../Fclass/signinFormClass.php');
require('../Fclass/inputText.php');
require('../Fclass/inputEmail.php');
require('../Fclass/inputPassword.php');

require('../models/Connection.php');
    $form = new signinFormClass($_POST);
    $con = new Connection();

    if($form->isValid()){
    $name = $form->getName()->getValue();
    $pass = $form->getPassword()->getValue();
    $cpass = $form->getPassword()->getValue();

    $result = $con->signin($user, $pass);

    if($result){
        echo json_encode(false);
    }else echo $form->getSigninPage(false);
    
} else echo $form->getSigninPage();

?>