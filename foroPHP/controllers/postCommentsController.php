<?php

spl_autoload_register(function ($class) {
    $path = '../AClasses/';
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
    $path = '../views/';
    $fullpath = $path . $class . '.php';
    while(!file_exists($fullpath)){
        return false;
    }
    require_once($fullpath);
});

$db = new Connection();

$postid = $_COOKIE['postid'];

$data = $db->getComments($postid);

$view = new PostCommentsView($data);

echo $view->getPage();

?>