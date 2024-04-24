<?php
    require_once __DIR__ . '/../models/example/ProductModel.php';
    class Home {
        public function invoke() {
            $productModel = new ProductModel();
            $products = $productModel->getAllProducts();
            require_once __DIR__ . '/../views/index.php';
        }
    }
    (new Home())->invoke();
?>