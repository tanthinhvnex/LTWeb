<?php
    require_once __DIR__ . '/../models/AdminModel.php';
    class AdminProduct {
        public function invoke() {
            $model = new AdminModel();
            $allProducts = $model->getAllProductsDetail();

            header("Content-Type: application/json");
            echo json_encode($allProducts);
            exit();
        }
    }
    (new AdminProduct())->invoke();
?>