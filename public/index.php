<?php

$path = $_SERVER['PATH_INFO'] ?? '/index';

require_once __DIR__ . '/../app/View' . $path . '.php';
