<?php
    class BillModel{
        public $BID;
        public $created_at;
        public $total_price;
        public $shipping_fee;
        public $credit_card_number;
        public $customer_email;
        public $AID;
    
        public function __construct($BID, $created_at, $total_price, $shipping_fee, $credit_card_number, $customer_email, $AID) {
            $this->BID = $BID;
            $this->created_at = $created_at;
            $this->total_price = $total_price;
            $this->shipping_fee = $shipping_fee;
            $this->credit_card_number = $credit_card_number;
            $this->customer_email = $customer_email;
            $this->AID = $AID;
        }
        public static function createBill($customer_email, $AID) {
            global $connection;
    
            $customer_email = mysqli_real_escape_string($connection, $customer_email);
            $AID = mysqli_real_escape_string($connection, $AID);
            $sql = "SELECT MAX(BID) AS max_bid FROM bill";
            $result = mysqli_query($connection, $sql);
            $row = mysqli_fetch_assoc($result);
            $maxBID = $row['max_bid'];
            $newBID = $maxBID + 1;

            $created_at = date("Y-m-d H:i:s");
    
            $sql = "INSERT INTO bill (BID, created_at,shipping_fee, customer_email, AID) 
                    VALUES ('$newBID', '$created_at',10, '$customer_email', '$AID')";
    
            $result = mysqli_query($connection, $sql);
    
            if ($result) {
                return $newBID; 
            } else {
                return false; 
            }
        }
        public static function addProduct($BID,$products){
            global $connection;

            $BID = mysqli_real_escape_string($connection, $BID);
    
            foreach ($products as $product) {
                $PID = mysqli_real_escape_string($connection, $product['PID']);
                $size = mysqli_real_escape_string($connection, $product['size']);
                $quantity = mysqli_real_escape_string($connection, $product['quantity']);
    
                $sql = "INSERT INTO bill_have_product (BID, PID, size, quantity) 
                        VALUES ('$BID', '$PID', '$size', '$quantity')";
    
                $result = mysqli_query($connection, $sql);
    
                if (!$result) {
                    echo "server error"; 
                    return;
                }
            }
    
            return true; // Return true if all products were added successfully
        }
    }

    class BillProductInfo {
        public $name;
        public $size;
        public $quantity;
        public function __construct($pName, $pS, $pQ) {
            $this->name = $pName;
            $this->size = $pS;
            $this->quantity = $pQ;
        }
    }

    class ShippingAddressInfo {
        public $reciever_name;
        public $reciever_phone;
        public $city_district_town;
        public $additional_address_info;
        public function __construct($pN, $pP, $pC, $pA) {
            $this->reciever_name = $pN;
            $this->reciever_phone = $pP;
            $this->city_district_town = $pC;
            $this->additional_address_info = $pA;
        }
    }

    class Bill {
        public $id;
        public $created_at;
        public $total_price;
        public $shipping_fee;
        public $credit_card_number;
        public $productInfos;
        public $shippingAddressInfos;
        public function __construct($pId, $pCreatedAt, $pTotalPrice, $pShippingFee, $pCreditCardNumber) {
            $this->id = $pId;
            $this->created_at = $pCreatedAt;
            $this->total_price = $pTotalPrice;
            $this->shipping_fee = $pShippingFee;
            $this->credit_card_number = $pCreditCardNumber;
            $this->productInfos = [];
            $this->shippingAddressInfos = null;
        }
    }
?>