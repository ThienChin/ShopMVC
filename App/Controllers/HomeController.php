<?php
require_once __DIR__ . '/../Model/ProductModel.php';
class HomeController
{
    public function index()
    {
        $product = new ProductModel();
        $productList = $product->getAllProducts();
        include 'app/views/home.php';
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo "Da tao user thanh cong";
            die;
        }
    }
}
