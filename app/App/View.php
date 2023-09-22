<?php

namespace Belajar\PHP\MVC\App;

class View
{
    public static function render(string $view, array $data = []): void
    {
        require __DIR__ . '/../View/' . $view . '.php';
    }
}
