<?php
class SimilarProductModel{
    public $PID;
    public $name;
    public $images;
    public $average_rating;
    public $listed_unit_price;
    public function __construct($PID) {
        $this->PID = $PID;
        $this->getProductDetails();
    }

    private function getProductDetails() {
     
        $productDetails = ProductModel::getProductById($this->PID);
        

        if ($productDetails) {

            $this->name = $productDetails[0]->name;
            $this->images = ProductModel::getImgsById($this->PID); // Assuming there's a method to get images by PID
            $this->average_rating = $productDetails[0]->average_rating;
            $this->listed_unit_price = $productDetails[0]->listed_unit_price;
        } else {

            echo "Product details not found for PID: " . $this->PID;
        }
    }
}
class ProductModel {
    // Properties
    public $PID;
    public $name;
    public $listed_unit_price;
    public $description;
    public $size;
    public $quantity_on_hand;
    public $discount;
    public $no_of_reviews;
    public $average_rating;

    // Constructor
    public function __construct($PID, $name, $listed_unit_price, $description, $size, $quantity_on_hand, $discount, $no_of_reviews, $average_rating) {
        $this->PID = $PID;
        $this->name = $name;
        $this->listed_unit_price = $listed_unit_price;
        $this->description = $description;
        $this->size = $size;
        $this->quantity_on_hand = $quantity_on_hand;
        $this->discount = $discount;
        $this->no_of_reviews = $no_of_reviews;
        $this->average_rating = $average_rating;
    }

    // Methods
    // Add more methods here as needed to interact with the product table in your database
    public static function getAllProducts() {
        global $connection;
        $sql = "SELECT * FROM product";
        $result = mysqli_query($connection, $sql);
        $products = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $product = new ProductModel(
                $row['PID'],
                $row['name'],
                $row['listed_unit_price'],
                $row['description'],
                $row['size'],
                $row['quantity_on_hand'],
                $row['discount'],
                $row['no_of_reviews'],
                $row['average_rating']
            );
            $products[] = $product;
        }
        return $products;
    }
    public static function getProductById($PID) {
        global $connection;
        $PID = mysqli_real_escape_string($connection, $PID);
        $sql = "SELECT * FROM product WHERE PID = '$PID'";
        $result = mysqli_query($connection, $sql);
        $products=array();
        if($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $product = new ProductModel(
                    $row['PID'],
                    $row['name'],
                    $row['listed_unit_price'],
                    $row['description'],
                    $row['size'], // Assuming 'size' is a string representing the size of the product
                    $row['quantity_on_hand'],
                    $row['discount'],
                    $row['no_of_reviews'],
                    $row['average_rating']
                );
                $products[] = $product;
            }
        } else {
            return null; // Product not found
        }
        return $products;
    }
    public static function getImgsById($PID) {
        global $connection;
        $PID = mysqli_real_escape_string($connection, $PID); // Sanitize the input
        $sql = "SELECT image_src FROM product_image_src WHERE PID = '$PID'";
        $result = mysqli_query($connection, $sql);
        $imageSrcs = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $imageSrcs[] = $row['image_src'];
        }
        return $imageSrcs;
    }
    public static function getSimilarProduct($PID){
        global $connection;
        $sql = "SELECT `similar_PID` FROM `product_similar_to_product` WHERE `PID`=1";
        $result=mysqli_query($connection,$sql);
        $similarProducts = array();
        if($result) {
            while($row = mysqli_fetch_assoc($result)){
                $similarPID = $row['similar_PID'];
                $similarProduct = new SimilarProductModel($similarPID);
                $similarProducts[] = $similarProduct;
            }
        } else {
            echo "Error: " . mysqli_error($connection);
        }
        return $similarProducts;
    }
}
?>