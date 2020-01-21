<?php
require_once __DIR__ . '/../vendor/autoload.php';
//require_once __DIR__ .
//    '/../src/Models/BooksModel.php';
//require_once __DIR__ .
//    '/../src/Core/Controller.php';
//require_once __DIR__ .
//    '/../src/Controllers/BooksController.php';
//require_once __DIR__ .
//    '/../src/Core/Router.php';

//$server = $_SERVER;
//$uri = $server['REQUEST_URI'];

//if ($uri == '/') {
//    $controller = new IndexController();
//    $controller->indexAction();
//}
//Ifmo\Web\Core\Router::run();
$config = __DIR__ . '/../config.json';
$config = json_decode(
    file_get_contents($config), true);
var_dump($config['urls']);
//composer