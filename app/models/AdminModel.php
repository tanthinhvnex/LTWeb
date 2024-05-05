<?php
    require_once __DIR__ . '/Database.php';

    class AdminModel {
        public function createNewProduct($name, $price, $description, $size, $quantity, $discount) {
            global $connection;
            $insertProductQuery = mysqli_query($connection, "INSERT INTO product (name,listed_unit_price,description,size,quantity_on_hand,discount) VALUES ('$name', '$price', '$description', '$size', '$quantity', '$discount')");
            $productIDQuery = mysqli_query($connection, "SELECT LAST_INSERT_ID()");
            $productID = mysqli_fetch_array($productIDQuery);
            return $productID[0];
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
    }
?>
