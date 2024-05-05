<?php
    require_once __DIR__ . '/../models/example/ProductModel.php';
    class AdminProduct {
        public function invoke() {
            $model = new ProductModel();

            $productModel = new ProductModel();
            $allProducts = $productModel->getAllProducts();

            header("Content-Type: application/json");
            echo json_encode($allProducts);
            exit();
        }
    }
    (new AdminProduct())->invoke();
?>