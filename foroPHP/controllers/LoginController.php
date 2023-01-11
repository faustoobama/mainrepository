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

    $form = new loginFormClass($_POST);
    $con = new Connection();
    const STATUS = [
    'notFound'=>404,
    'disabled'=>403,
    'inactive'=>300,
    'ack'=>200
    ];
    $form->printHeader();
    if($form->isValid()){
        $user = $form->getEmail()->getValue();
        $pass = $form->getPassword()->getValue();

        $result = $con->login($user, $pass);

        switch ($result['status']) {
            case STATUS['ack']:
                header('Location: ../index.php');
                break;
            case STATUS['notFound']:
                echo $form->getLoginPage('unauthorized');
                break;
            case STATUS['disabled']:
                echo $form->getLoginPage('disabled');
                break;
            case STATUS['inactive']:
                echo $form->getLoginPage('inactive');
                break;
        }
    } else echo $form->getLoginPage();
    $form->printFooter();
    
    ?>