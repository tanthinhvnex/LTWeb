<?php
require_once __DIR__ . '/../models/ProductModel.php';
require_once __DIR__ . '/../models/ReviewModel.php';
require_once __DIR__ . '/../models/Cart.php';
    class Detail {
        public function invoke() {
            $requestUri = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
            $parsedUrl = parse_url($requestUri);
            $path = trim($parsedUrl['path'], '/');
            $segments = explode('/', $path);
            $endpoint = end($segments);
            if(isset($_GET['id'])&& $endpoint==='detail') {

                $id = $_GET['id'];
                $products = ProductModel::getProductById($id);
                $product=$products[0];
                // echo var_dump($product);
                $productImgs=ProductModel::getImgsById($id);
                $reviews=ReviewModel::getReviewsByProductId($id);
                $similarProduct=ProductModel::getSimilarProduct($id);


                require_once __DIR__ . '/../views/product-detail.php';
            } else {

            }
            $this->receiveRequest();
            
        }
        public function receiveRequest(){
            $requestUri = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
            $parsedUrl = parse_url($requestUri);
            $path = trim($parsedUrl['path'], '/');
            $segments = explode('/', $path);
            $endpoint = end($segments);
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if ($endpoint === 'add_to_cart') {
                    $this->handleAddToCart();
                }else if ($endpoint === 'send_review') {
                    $this->sendReview();
                } else {
                    echo "Unknown endpoint";
                    exit; 
                }
            }else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                if ($endpoint === 'reviews') {
                    $this->handleGetReviews();
                } else {
                    echo "Unknown endpoint";
                    exit; 
                }
            }
        }
        private function handleAddToCart(){
            $jsonData = file_get_contents('php://input');
            $data = json_decode($jsonData, true);
            $email=$_SESSION['user']->email;
            CartModel::addToCart($email,$data['PID'], $data['size'], $data['quantity']);
        }
        private function handleGetReviews(){
            $id = $_GET['id'];
            $reviews = ReviewModel::getReviewsByProductId($id);
            if ($reviews) {
                echo json_encode($reviews);
            } else {
                echo json_encode([]);
            }
        }
        private function sendReview(){
            $jsonData = file_get_contents('php://input');
            $data = json_decode($jsonData, true);
            $email=$_SESSION['user']->email;
            $review=new ReviewModel(NULL,$email, $data['star'], $data['content'],NULL, $data['PID']);
            $review->saveReview();
        }
    }
    (new Detail())->invoke();
?>