<?php

namespace App1\Services;

use App1\Models\Product;

class ProductService
{
    public function createProduct(string $name, float $price): Product
    {
        return new Product($name, $price);
    }

    public function displayProduct(Product $product): string
    {
        return "Produk: " . $product->getName()
            . "<br>Harga: " . $product->getFormattedPrice();
    }
}