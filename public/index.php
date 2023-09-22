<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Belajar\PHP\MVC\App\Router;
use Belajar\PHP\MVC\Controller\HomeController;
use Belajar\PHP\MVC\Controller\LoginController;
use Belajar\PHP\MVC\Controller\ProductController;
use Belajar\PHP\MVC\Middleware\AuthMiddleware;

// Login
Router::add('GET', '/login', LoginController::class, 'index');

// Home
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello', [AuthMiddleware::class]);
Router::add('GET', '/world', HomeController::class, 'world', [AuthMiddleware::class]);

// Product 
Router::add('GET', '/products/([0-9]*)/categories/([0-9]*)', ProductController::class, 'categories');

Router::run();
