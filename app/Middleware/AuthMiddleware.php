<?php

namespace Belajar\PHP\MVC\Middleware;

class AuthMiddleware implements Middleware
{
    public function __construct()
    {
        session_start();
    }

    public function before(): void
    {
        if (!isset($_SESSION['user'])) {
            header("Location: /login");
            exit();
        }
    }
}
