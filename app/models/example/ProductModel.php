<?php
    require_once __DIR__ . '/Product.php';
    require_once __DIR__ . '/CartProduct.php';
    require_once __DIR__ . '/../Database.php';

    class ProductModel {
        public function getAllProducts() {
            global $connection;
            $sql = "SELECT p.PID, p.name, p.listed_unit_price, p.description, p.average_rating AS rating, pis.image_src AS image
            FROM product p
            LEFT JOIN product_image_src pis ON p.PID = pis.PID
            GROUP BY p.PID, p.name
            ORDER BY p.PID";
            $allProductsQuery = mysqli_query($connection, $sql);
            $allProducts = array();
            while ($row = mysqli_fetch_assoc($allProductsQuery)) {
                $allProducts[] = new Product($row['PID'],$row['name'],$row['listed_unit_price'],$row['description'],$row['image'],$row['rating']);
            }
            return $allProducts;
        }

        
        public function getProductDetail($id) {
            global $connection;
            $detailProductQuery = mysqli_query($connection, "SELECT * FROM products where id = $id");
            $detailProduct = mysqli_fetch_assoc($detailProductQuery);
            return new Product($detailProduct['id'],$detailProduct['name'],$detailProduct['price'],$detailProduct['description'],$detailProduct['image']);
        }
        
        public function getFavouriteProducts($email) {
            global $connection;
            $sql = "SELECT p.PID, p.name, p.listed_unit_price, p.description,  p.average_rating AS rating, pis.image_src AS image
                FROM product p
                LEFT JOIN customer_add_to_favourite_product fav ON p.PID = fav.PID
                LEFT JOIN product_image_src pis ON p.PID = pis.PID
                WHERE fav.customer_email = '$email'
                GROUP BY p.PID";

            $result = mysqli_query($connection, $sql);
            $products = [];
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $products[] = new Product(
                        $row['PID'],
                        $row['name'],
                        $row['listed_unit_price'],
                        $row['description'],
                        $row['image'],
                        $row['rating']
                    );
                }
                mysqli_free_result($result);
            } else {
                echo "Database query failed: " . mysqli_error($connection);
            }

            return $products;
           
        }
        public function getCartProducts($email) {
            global $connection;
            $sql = "SELECT p.PID, p.name, p.listed_unit_price, p.description,  p.average_rating AS rating, pis.image_src AS image , cart.size, cart.quantity
                FROM product p
                LEFT JOIN customer_add_to_cart_product cart ON p.PID = cart.PID
                LEFT JOIN product_image_src pis ON p.PID = pis.PID
                WHERE cart.customer_email = '$email'
                GROUP BY p.PID";

            $result = mysqli_query($connection, $sql);
            $products = [];
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $products[] = new CartProduct(
                        $row['PID'],
                        $row['name'],
                        $row['listed_unit_price'],
                        $row['description'],
                        $row['image'],
                        $row['rating'],
                        $row['size'],
                        $row['quantity']
                    );
                }
                mysqli_free_result($result);
            } else {
                echo "Database query failed: " . mysqli_error($connection);
            }

            return $products;
           
        }
        public function deleteFavouriteProduct($pid, $email) {
            global $connection;
            $sql = "DELETE FROM customer_add_to_favourite_product WHERE PID = ? AND customer_email = ?";
            $stmt = $connection->prepare($sql);
            if ($stmt) {
                $stmt->bind_param('is', $pid, $email);
                $stmt->execute();
                $affectedRows = $stmt->affected_rows;
                $stmt->close();
                return $affectedRows > 0;
            }
            return false;
        }

        public function addToCart($productId, $quantity, $customerEmail) {
            global $connection;
            $productId = mysqli_real_escape_string($connection, $productId);
            $quantity = mysqli_real_escape_string($connection, $quantity);
        
            $query = "SELECT * FROM customer_add_to_cart_product WHERE customer_email = '{$customerEmail}' AND PID = '{$productId}'";
            $result = mysqli_query($connection, $query);

            if (mysqli_num_rows($result) > 0) {
               
                $row = mysqli_fetch_assoc($result);
                $newQuantity = $row['quantity'] + $quantity;
                $updateQuery = "UPDATE customer_add_to_cart_product SET quantity = '{$newQuantity}' WHERE customer_email = '{$customerEmail}' AND PID = '{$productId}'";
                mysqli_query($connection, $updateQuery);
            } else {
                
                $size = "small";
                $insertQuery = "INSERT INTO customer_add_to_cart_product (customer_email, PID, size, quantity) VALUES ('{$customerEmail}', '{$productId}', '{$size}', '{$quantity}')";
                mysqli_query($connection, $insertQuery);
            }
        }
      
        public function getNoOfProductInCart($email) {
            global $connection;
            $cartQuantityQuery = mysqli_query($connection, "SELECT COUNT(*) FROM customer_add_to_cart_product WHERE customer_email = '$email'");
            $cartQuantity = mysqli_fetch_assoc($cartQuantityQuery);
            return $cartQuantity['COUNT(*)'];
        }

        public function getNoOfProductInFav($email) {
            global $connection;
            $favQuantityQuery = mysqli_query($connection, "SELECT COUNT(*) FROM customer_add_to_favourite_product WHERE customer_email = '$email'");
            $favQuantity = mysqli_fetch_assoc($favQuantityQuery);
            return $favQuantity['COUNT(*)'];
        }
    }
?>
