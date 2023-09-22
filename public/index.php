<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Belajar\PHP\MVC\App\Router;
use Belajar\PHP\MVC\Controller\HomeController;
use Belajar\PHP\MVC\Controller\ProductController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');

Router::add('GET', '/products/([0-9]*)/categories/([0-9]*)', ProductController::class, 'categories');

Router::run();
