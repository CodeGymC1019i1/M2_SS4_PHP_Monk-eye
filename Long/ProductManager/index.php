<?php
include_once "Model/Product.php";
include_once "Service/ProductManager.php";

use Service\ProductManager;
use Model\Product;

$productManager = new ProductManager();
$productManager->add(new Product("Laptop"));
$productManager->add(new Product("Mobile"));

$products = $productManager->getProducts();
foreach ($products as $product) {
    echo $product->getName() ."<br/>";
}