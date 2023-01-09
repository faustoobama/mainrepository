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

$data = $db->getPosts();

$view = new PostsPageView($data);

echo $view->getPage();

?>
