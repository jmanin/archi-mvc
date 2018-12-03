<?php

require_once "vendor/autoload.php";

$url = explode("/", $_SERVER['REQUEST_URI']);
//var_dump($url);
if ( empty($url[1])){
   $controller = 'FrontController';
   $target = 'index';
   $idCible = null;
}else{
    $controller = $url[1];
    $target = $url[2];
    $idCible = isset($url[3]) ? intval($url[3]) : null;
}


$class = "Controllers\\" . $controller;
$params = [
    "id"  => $idCible
];
if (class_exists($class, true)) {
    $class = new $class();
    if (in_array($target, get_class_methods($class))) {
        call_user_func_array([$class, $target], $params);
    } else {
        call_user_func([$class, "index"]);
    }
} else {
    $class = "Controllers\\" . 'FrontController';
    $target = 'index';
    $class = new $class();
    call_user_func_array([$class, $target], $params);

}