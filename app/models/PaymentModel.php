<?php
require_once __DIR__ . '/../models/Payment.php';  
require_once __DIR__ . '/../models/Database.php';   

class PaymentModel {
    public function getBillInfo($id) {
        global $connection;  
        $billInfo = [];
        $billQuery = "SELECT total_price, AID FROM bill WHERE BID = ?";
        if ($stmt = $connection->prepare($billQuery)) {
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows === 0) {
                return "No bill found with ID: $id";
            }
            $billData = $result->fetch_assoc();
            $billInfo['totalPrice'] = $billData['total_price'];
            $aid = $billData['AID'];
            $stmt->close();
        } else {
            return "Database error: " . $connection->error;
        }


        $itemsQuery = "SELECT SUM(quantity) AS numberOfItem FROM bill_have_product WHERE BID = ?";
        if ($stmt = $connection->prepare($itemsQuery)) {
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $itemsData = $result->fetch_assoc();
            $billInfo['numberOfItem'] = $itemsData['numberOfItem'] ?? 0;
            $stmt->close();
        } else {
            return "Database error: " . $connection->error;
        }


        $addressQuery = "SELECT reciever_name, city_district_town, additional_address_info FROM shipping_address WHERE AID = ?";
        if ($stmt = $connection->prepare($addressQuery)) {
            $stmt->bind_param("i", $aid);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $addressData = $result->fetch_assoc();
                $billInfo['receiverName'] = $addressData['reciever_name'];
                $billInfo['cityDistrictTown'] = $addressData['city_district_town'];
                $billInfo['additionalAddressInfo'] = $addressData['additional_address_info'];
            }
            $stmt->close();
        } else {
            return "Database error: " . $connection->error;
        }
        return new PaymentInfo($billInfo['numberOfItem'], $billInfo['totalPrice'],  $billInfo['receiverName'],$billInfo['cityDistrictTown'], $billInfo['additionalAddressInfo'] );  
    }
    public function updateBill($cardNumber, $email, $shippingCost, $id, $currentEmail){
        global $connection;
        $email = mysqli_real_escape_string($connection, $email);
        $cardNumber = mysqli_real_escape_string($connection, $cardNumber);
        $shippingCost = mysqli_real_escape_string($connection, $shippingCost);
        $currentEmail = mysqli_real_escape_string($connection, $currentEmail);


        $updateQuery = "UPDATE bill SET 
                            customer_email = '{$email}', 
                            shipping_fee = '{$shippingCost}', 
                            credit_card_number = '{$cardNumber}' 
                        WHERE BID = '{$id}'";


        $deleteQuery = "DELETE FROM customer_add_to_cart_product WHERE customer_email = '{$currentEmail}'";


        if ($connection->query($updateQuery) === TRUE) {
            

            if ($connection->query($deleteQuery) === TRUE) {
                
            } else {
                
            }
        } else {
            
        }

    }
    public function checkEmail($id){
        global $connection;
        $query = "SELECT customer_email, AID FROM bill WHERE BID = '" . mysqli_real_escape_string($connection, $id) . "'";
        $result = mysqli_query($connection, $query);
        
        if ($row = mysqli_fetch_assoc($result)) {
            $customer_email = mysqli_real_escape_string($connection, $row['customer_email']);
            $AID = mysqli_real_escape_string($connection, $row['AID']);
            $checkQuery = "SELECT * FROM shipping_address WHERE customer_email = '{$customer_email}' AND AID = '{$AID}'";
            $checkResult = mysqli_query($connection, $checkQuery);

            return mysqli_num_rows($checkResult) > 0;
        }


        return false;
    }

    public function checkCreditcard($cardNumber, $email){
        global $connection;
        $cardNumber = mysqli_real_escape_string($connection, $cardNumber);
        $email = mysqli_real_escape_string($connection, $email);
        $query = "SELECT * FROM credit_card WHERE card_number = '{$cardNumber}' AND customer_email = '{$email}'";
        $result = mysqli_query($connection, $query);
        return mysqli_num_rows($result) > 0;
    }

    
}
?>

