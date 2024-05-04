<?php 
class CartModel {
    public static function addToCart($email, $PID, $size, $quantity) {
        global $connection;
        $email = mysqli_real_escape_string($connection, $email);
        $PID = mysqli_real_escape_string($connection, $PID);
        $size = mysqli_real_escape_string($connection, $size);
        $quantity = intval($quantity);

        // Check if the item already exists in the cart
        $sql = "SELECT * FROM customer_add_to_cart_product 
                WHERE customer_email = '$email' AND PID = '$PID' AND size = '$size'";
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Update the quantity if the item already exists
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
            // Insert a new row if the item does not exist
            $insertSql = "INSERT INTO customer_add_to_cart_product (customer_email, PID, size, quantity) 
                          VALUES ('$email', '$PID', '$size', $quantity)";
            $insertResult = mysqli_query($connection, $insertSql);
            if ($insertResult) {
                echo "Add to cart success";
                return true; // Item inserted successfully
            } else {
                echo "Failed to update quantity";
                return;
            }
        }
    }
}

?>
