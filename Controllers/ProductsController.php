<?php


class ProductsController implements Controller
{
    private Connection $db;

    public function __construct()
    {
        $this->db = new Connection();
    }


    public function render ($GET):void {
        $title = 'Products';
        $pdo = new ProductLoader();
        $products = $pdo->getAllProducts($this->db);
        require 'Views/products.php';
    }
}
