<?php
    require_once __DIR__ . '/../models/example/ProductModel.php';
    class Favourite {
        public function invoke() {
            if ($_SESSION['user'] ?? FALSE){
            $_SESSION['user'];
            $productModel = new ProductModel();
            $products = $productModel->getFavouriteProducts($_SESSION['user']->email);
            }
            require_once __DIR__ . '/../views/favourite.php';
        }
    }
    (new Favourite())->invoke();
?>