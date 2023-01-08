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

if(isset($_GET['category'])){
    $category = $_GET['category'];
}else $category = '';

$data = $db->getNews($category);

$view = new NewsPageView($data,$category);

echo $view->getPage();

?>
