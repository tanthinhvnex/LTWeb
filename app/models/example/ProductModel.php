<?php
    require_once __DIR__ . '/Product.php';
    require_once __DIR__ . '/../Database.php';

    class ProductModel {
        public function getAllProducts() {
            global $connection;
            $allProductsQuery = mysqli_query($connection, "SELECT * FROM products");
            $allProducts = array();
            while ($row = mysqli_fetch_assoc($allProductsQuery)) {
                $allProducts[] = new Product($row['id'],$row['name'],$row['price'],$row['description'],$row['image']);
            }
            return $allProducts;
        }
        
        public function getProductDetail($id) {
            global $connection;
            $detailProductQuery = mysqli_query($connection, "SELECT * FROM products where id = $id");
            $detailProduct = mysqli_fetch_assoc($detailProductQuery);
            return new Product($detailProduct['id'],$detailProduct['name'],$detailProduct['price'],$detailProduct['description'],$detailProduct['image']);
        }
    }
?>
