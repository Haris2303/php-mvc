<?php

namespace Belajar\PHP\MVC\Controller;

use Belajar\PHP\MVC\App\View;

class HomeController
{
    public function index(): void
    {
        $data = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat belajar PHP MVC dari Programmer Zaman Now"
        ];
        View::render('/home/index', $data);
    }

    public function hello(): void
    {
        echo "HomeController.hello()";
    }

    public function world(): void
    {
        echo "HomeController.world()";
    }

    public function login(): void
    {
        $request = [
            "username" => $_POST['username'],
            "password" => $_POST['password']
        ];

        $response = [
            "message" => "Login Sukses"
        ];

        // kirimkan ke view
    }
}
