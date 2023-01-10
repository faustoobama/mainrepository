<?php
require('../Fclass/signinFormClass.php');
require('../Fclass/inputText.php');
require('../Fclass/inputEmail.php');
require('../Fclass/inputPassword.php');

require('../models/Connection.php');

    $form = new signinFormClass($_POST);
    $db = new Connection();

    if($form->isValid()){
        $name = $form->getName()->getValue();
        $email = $form->getEmail()->getValue();
        $result = $db->signin($name, $email);

        if(!$result){
            echo json_encode($result);
        }else echo $form->getSigninPage(false);
        
    } else echo $form->getSigninPage();

?>