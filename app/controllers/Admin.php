<?php
    require_once __DIR__ . '/../models/AdminModel.php';
    class AdminController {
        public function invoke() {
            if (isset($_POST['name'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $desc = $_POST['description'];
                $image = $_POST['image'];
                $quantity = $_POST['quantity'];
                $discount = $_POST['discount'];
                $size = $_POST['size'];
                if (strlen($_POST['similar']) > 0) {
                    $similar = explode(",",$_POST['similar']);
                }
                else {
                    $similar = [];
                }

                $model = new AdminModel();
                $productID = $model->createNewProduct($name,$price,$desc,$size,$quantity,$discount);
                
                // $model->insertIntoSimilarProduct($productID,$similar);
                
                // $model->insertIntoProductImageSrc($productID,$image);
                // echo "<script>alert('Thêm sản phẩm mới thành công')</script>";
                // require_once __DIR__ . '/../views/index-admin.php';
                header("Content-Type: application/json");
                echo json_encode("");
                exit();
            }
            else {
                require_once __DIR__ . '/../views/index-admin.php';
                exit();
            }
        }
    }
    (new AdminController())->invoke();
?>