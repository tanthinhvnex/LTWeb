<?php
    require_once __DIR__ . '/../models/example/ProductModel.php';
    class LoginHeader {
        public function invoke() {
            $model = new ProductModel();

            $productModel = new ProductModel();
            $cartQuantity = $productModel->getNoOfProductInCart($_SESSION['user']->email);
            $favQuantity = $productModel->getNoOfProductInFav($_SESSION['user']->email);
            $favProducts = $productModel->getFavouriteProducts($_SESSION['user']->email);
            $cartProducts = $productModel->getCartProducts($_SESSION['user']->email);

            $data = array(
                "cartQuantity"=>$cartQuantity,
                "favQuantity"=>$favQuantity,
                "favProducts"=>$favProducts,
                "cartProducts"=>$cartProducts
            );
            header("Content-Type: application/json");
            echo json_encode($data);
            exit();
        }
    }
    (new LoginHeader())->invoke();
?>