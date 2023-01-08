<?php

    session_start();

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

    if(isset($_SESSION['username'])){
        $db = new Connection();
        $data = new CommentFormClass($_POST);

        $userid = $_SESSION['userid'];
        $postid = $_COOKIE['postid'];
        $comment = '';
        if($data->isValid()){
            $comment = $data->getData()->getValue();
            $res = $db->newComment($userid,$postid,$comment);
            echo json_encode($res);
        } else echo json_encode('Comentario invalido');
    }else die(json_encode('Es necesario iniciar sesion para comentar'));
?>