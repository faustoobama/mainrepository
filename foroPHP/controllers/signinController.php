<?php
spl_autoload_register(function ($class) {
    $path = '../Fclass/';
    $fullpath = $path . $class . '.php';
    while(!file_exists($fullpath)){
        return false;
    }
    require_once($fullpath);
});

spl_autoload_register(function ($class) {
    $path = '../models/';
    $fullpath = $path . $class . '.php';
    while(!file_exists($fullpath)){
        return false;
    }
    require_once($fullpath);
});

spl_autoload_register(function ($class) {
    $path = '../Traits/';
    $fullpath = $path . $class . '.php';
    while(!file_exists($fullpath)){
        return false;
    }
    require_once($fullpath);
});

    $form = new signinFormClass($_POST);
    $db = new Connection();
    $form->printHeader();
        if($form->isValid()){
            $name = $form->getName()->getValue();
            $email = $form->getEmail()->getValue();
            $result = $db->signin($name, $email);
    
            if($result){
                echo $form->getSuccesfullSign();
            }else echo $form->getSigninPage(false);
            
        } else echo $form->getSigninPage();
    $form->printFooter();
    ?>