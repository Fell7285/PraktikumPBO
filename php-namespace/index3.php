<?php

require_once __DIR__ . '/vendor/autoload.php';

use App1\Services\ProductService;

try {
    $service = new ProductService();

    $product1 = $service->createProduct('Laptop', 8500000);
    $product2 = $service->createProduct('Mouse', 150000);

    echo $service->displayProduct($product1);
    echo "<br><br>";
    echo $service->displayProduct($product2);
} catch (Throwable $e) {
    echo "<h3>Terjadi Error</h3>";
    echo "<p>Pesan: " . $e->getMessage() . "</p>";
    echo "<p>File: " . $e->getFile() . "</p>";
    echo "<p>Line: " . $e->getLine() . "</p>";
}