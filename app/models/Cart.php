<?php 
require_once __DIR__ . '\ProductModel.php';
class ProductInCartModel{
    public $PID;
    public $name;
    public $listed_unit_price;
    public $size;
    public $discount;
    public $quantity;
    public $image;
    public function __construct($PID, $quantity,$size) {
        $this->PID = $PID;
        $this->quantity = $quantity;
        $this->size=$size;
        $product=ProductModel::getProductById($PID)[0];
        $this->name=$product->name;
        $this->listed_unit_price=$product->listed_unit_price;
        $this->discount=$product->discount;
        $this->image=ProductModel::getImgsById($PID)[0];
    }
}
class CartModel {
    public static function addToCart($email, $PID, $size, $quantity) {
        global $connection;
        $email = mysqli_real_escape_string($connection, $email);
        $PID = mysqli_real_escape_string($connection, $PID);
        $size = mysqli_real_escape_string($connection, $size);
        $quantity = intval($quantity);


        $sql = "SELECT * FROM customer_add_to_cart_product 
                WHERE customer_email = '$email' AND PID = '$PID' AND size = '$size'";
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
            $existingQuantity = intval($row['quantity']);
            $newQuantity = $existingQuantity + $quantity;
            $updateSql = "UPDATE customer_add_to_cart_product 
                          SET quantity = $newQuantity 
                          WHERE customer_email = '$email' AND PID = '$PID' AND size = '$size'";
            $updateResult = mysqli_query($connection, $updateSql);
            if ($updateResult) {
                echo "Add to cart success";
                return;
            } else {
                echo "Failed to update quantity";
                return;
            }
        } else {

            $insertSql = "INSERT INTO customer_add_to_cart_product (customer_email, PID, size, quantity) 
                          VALUES ('$email', '$PID', '$size', $quantity)";
            $insertResult = mysqli_query($connection, $insertSql);
            if ($insertResult) {
                echo "Add to cart success";
                return true; 
            } else {
                echo "Failed to update quantity";
                return;
            }
        }
    }
    public static function getCartByUser($email){
        global $connection;
        $email = mysqli_real_escape_string($connection, $email);
        $sql="SELECT * FROM customer_add_to_cart_product WHERE customer_email='$email'";
        $result=mysqli_query($connection,$sql);
        $productInCart=array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $PID = $row['PID'];
                $size = $row['size'];
                $quantity = $row['quantity'];
                
                $productInCart[]=new ProductInCartModel($PID,$quantity,$size);
                
            }
            return $productInCart;
        } else {
            echo "No results found.";
        }
        
    }
    public static function deleteFromCart($email,$PID,$size){
        global $connection;
        $email = mysqli_real_escape_string($connection, $email);
        $PID = mysqli_real_escape_string($connection, $PID);
        $sql = "DELETE FROM customer_add_to_cart_product WHERE customer_email='$email' AND PID='$PID' AND size='$size'";
        $result=mysqli_query($connection,$sql);
        if ($result) {
            echo "Item deleted from cart";
            
        } else {
            echo "Failed to delete item from cart";
        }
        
    }
}

?>
