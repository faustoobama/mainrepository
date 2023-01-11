<?php

require('../Fclass/Activation.php');
require('../Fclass/inputText.php');
require('../Fclass/inputPassword.php');
require('../models/Connection.php');

$form = new Activation($_POST);
$db = new Connection();

if($form->isValid()){
    $rac = $form->getRandomAccesCode()->getValue();
    $pass = $form->getPassword()->getValue();

    $result = $db->activateUser($rac,$pass);

    if($result){
        echo 'Usuario activado. Puede proceder a iniciar sesión';
    }else die('Clave de acceso incorrecta');
}else echo $form->getActivationForm();

?>