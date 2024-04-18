<?php
    require_once __DIR__ . '/../../models/example/ProductModel.php';
    class AllProducts {
        public function __contruct() {}
        public function invoke() {
            $model = new ProductModel();
            $allProducts = $model->getAllProducts();
            require_once __DIR__ . '/../../views/list.php';
        }
    }
    (new AllProducts())->invoke();
?>