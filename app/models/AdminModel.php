<?php
    require_once __DIR__ . '/Database.php';

    class AdminModel {
        public function createNewProduct($name, $price, $quantity, $discount, $description) {
            global $connection;
            // $insertProductQuery = mysqli_query($connection,
                // "INSERT INTO product VALUES ('$name', '$price', " . (($remember) ? "true" : "false") . ")");
        }
    }
?>
