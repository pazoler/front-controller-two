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
$request = new \Ifmo\Web\Core\Request();

$config = __DIR__ . '/../config.json';

$app = new \Ifmo\Web\Core\Application($config);
$response = $app->handleRequest($request);
$response->send();

