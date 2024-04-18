<?php
    require_once __DIR__ . '/../../models/example/ProductModel.php';
    class ProductDetail {
        public function __contruct() {}
        public function invoke() {
            if(isset($_GET['id'])) {
                $model = new ProductModel();
                $product = $model->getProductDetail($_GET['id']);
                $allProducts = $model->getAllProducts();
                require_once __DIR__ . '/../../views/detail.php';
            }
            else {
                echo
                "<script>
                    alert(\"Phải chỉ định id sản phẩm\");
                </script>";
                die();
            }
        }
    }
    (new ProductDetail())->invoke();
?>