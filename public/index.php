<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Belajar\PHP\MVC\App\Router;

Router::add('GET', '/', 'HomeController', 'index');
Router::add('GET', '/login', 'LoginController', 'login');
Router::add('GET', '/register', 'RegisterController', 'register');

Router::run();
