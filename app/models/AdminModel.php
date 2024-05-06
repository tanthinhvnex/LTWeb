<?php
    require_once __DIR__ . '/example/Product.php';
    require_once __DIR__ . '/Database.php';

    class AdminModel {
        public function getAllProductsDetail() {
            global $connection;
            $sql = "SELECT p.PID, p.name, p.listed_unit_price, p.size, p.description, p.average_rating AS rating, p.quantity_on_hand, p.discount FROM product p";
            $allProductsQuery = mysqli_query($connection, $sql);
            $allProducts = array();
            while ($row = mysqli_fetch_assoc($allProductsQuery)) {
                $product = new ProductDetail($row['PID'],$row['name'],$row['listed_unit_price'],$row['description'],$row['size'],$row['rating'],$row['quantity_on_hand'],$row['discount']);
                $query = "SELECT image_src FROM product_image_src WHERE PID = " . intval($row['PID']);
                $productImageSrcQuery = mysqli_query($connection, $query);
                while ($row2 = mysqli_fetch_assoc($productImageSrcQuery)) {
                    $product->img[] = $row2['image_src'];
                }
                $query = "SELECT similar_PID FROM product_similar_to_product WHERE PID = " . intval($row['PID']);
                $productSimilarQuery = mysqli_query($connection, $query);
                while ($row2 = mysqli_fetch_assoc($productSimilarQuery)) {
                    $product->similar[] = $row2['similar_PID'];
                }
                $allProducts[] = $product;
            }
            return $allProducts;
        }

        public function createNewProduct($name, $price, $description, $size, $quantity, $discount) {
            global $connection;
            $insertProductQuery = mysqli_query($connection, "INSERT INTO product (name,listed_unit_price,description,size,quantity_on_hand,discount) VALUES ('$name', '$price', '$description', '$size', '$quantity', '$discount')");
            $productIDQuery = mysqli_query($connection, "SELECT LAST_INSERT_ID()");
            $productID = mysqli_fetch_array($productIDQuery);
            return $productID[0];
        }

        public function updateProduct($id, $name, $price, $description, $size, $quantity, $discount) {
            global $connection;
            $query = "UPDATE product SET name = '$name', listed_unit_price = " . intval($price) . ", description = '$description', quantity_on_hand =  " . intval($quantity) . ", discount =  " . intval($discount) . " WHERE PID = " . intval($id) ." AND size = '$size'";
            $insertProductQuery = mysqli_query($connection, $query);
            return mysqli_affected_rows($connection);
        }

        public function deleteProduct($productID,$size) {
            global $connection;
            $deleteProductQuery = mysqli_query($connection, "DELETE FROM product WHERE PID = $productID AND size = '$size'");
        }
        
        public function insertIntoSimilarProduct($productID, $similar) {
            global $connection;
            $successful = "";
            for ($i = 0; $i < count($similar); $i++) {
                $query = "INSERT INTO product_similar_to_product (PID,similar_PID) VALUES (" . intval($productID) . ", " . intval($similar[$i]) . ")";
                mysqli_query($connection, $query);
                $successful .= mysqli_affected_rows($connection);
            }
            return $successful;
        }
        
        public function insertIntoProductImageSrc($productID, $image) {
            global $connection;
            $successful = "";
            for ($i = 0; $i < count($image); $i++) {
                $query = "INSERT INTO product_image_src (PID,image_src) VALUES (" . intval($productID) . ", '$image[$i]')";
                mysqli_query($connection, $query);
                $successful .= mysqli_affected_rows($connection);
            }
            return $successful;
        }

        public function updateSimilarProduct($productID, $similar) {
            global $connection;
            $successful = "";
            $query = "DELETE FROM product_similar_to_product WHERE PID = ". intval($productID);
            mysqli_query($connection, $query);
            $successful .= mysqli_affected_rows($connection);

            $this->insertIntoSimilarProduct($productID,$similar);

            return $successful;
        }
        
        public function updateProductImageSrc($productID, $image) {
            global $connection;
            $successful = "";
            $query = "DELETE FROM product_image_src WHERE PID = ". intval($productID);
            mysqli_query($connection, $query);
            $successful .= mysqli_affected_rows($connection);

            $this->insertIntoProductImageSrc($productID,$image);

            return $successful;
        }
    }
?>
