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

    $db->activateUser($rac,$pass);

    header('Location: ../index.html');

}else echo $form->getActivationForm();

?>