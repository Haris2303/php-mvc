<?php

namespace Belajar\PHP\MVC\Controller;

class ProductController
{
    public function categories(string $productId, string $categoryId): void
    {
        echo "Product ID : $productId, Category ID : $categoryId";
    }
}
