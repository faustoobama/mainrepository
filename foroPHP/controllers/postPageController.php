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
spl_autoload_register(function ($class) {
    $path = '../Traits/';
    $fullpath = $path . $class . '.php';
    while(!file_exists($fullpath)){
        return false;
    }
    require_once($fullpath);
});

$postid = 0;

if(isset($_GET['postid'])){
    $postid = $_GET['postid'];
}

$db = new Connection();

$data = $db->getPost($postid);

if($data){
    $view = new PostPageView($data);
    setcookie('postid', $data['id']);
    $view->printHeader();
    echo $view->getPage();
    $view->printFooter();
} else
    echo ('No post found');

?>
