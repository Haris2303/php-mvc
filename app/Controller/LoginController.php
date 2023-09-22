<?php

namespace Belajar\PHP\MVC\Controller;

use Belajar\PHP\MVC\App\View;

class LoginController
{
    public function index(): void
    {
        $data = [
            "title" => "Login Page",
            "content" => "Please Login!!!"
        ];

        View::render('login/index', $data);
    }
}
