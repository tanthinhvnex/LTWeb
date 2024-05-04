<?php
    require_once __DIR__ . '/../models/example/ProductModel.php';
    class Favourite {
        public function invoke() {
            if ($_SESSION['user'] ?? FALSE){
            $_SESSION['user'];
            $productModel = new ProductModel();
            $products = $productModel->getFavouriteProducts($_SESSION['user']->email);
            }
            $pid = $_POST['pid'] ?? 0;
            $email = $_SESSION['user']->email;
            if (isset($_POST['pid'])) {
               $productModel = new ProductModel();
               $success = $productModel->deleteFavouriteProduct($pid, $email);
            
               if ($success) {
                echo json_encode(['success' => true]);
                } else {
                    echo json_encode(['success' => false, 'message' => 'Failed to delete product']);
                }
                
            }
            
            
                require_once __DIR__ . '/../views/favourite.php';
            }
        }
    (new Favourite())->invoke();
?>