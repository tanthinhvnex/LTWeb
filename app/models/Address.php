<?php
    class Address {
        public $customerEmail;
        public $AID;
        public $receiverName;
        public $receiverPhone;
        public $cityDistrictTown;
        public $additionalAddressInfo;
        public $isDefault;

        public function __construct($customerEmail, $AID, $receiverName, $receiverPhone, $cityDistrictTown, $additionalAddressInfo, $isDefault) {
            $this->customerEmail = $customerEmail;
            $this->AID = $AID;
            $this->receiverName = $receiverName;
            $this->receiverPhone = $receiverPhone;
            $this->cityDistrictTown = $cityDistrictTown;
            $this->additionalAddressInfo = $additionalAddressInfo;
            $this->isDefault = $isDefault;
        }


        public function addAddress() {
            global $connection;
            $sql = "SELECT MAX(AID) AS max_aid FROM shipping_address";
            $result = mysqli_query($connection, $sql);
            $row = mysqli_fetch_assoc($result);
            $maxAID = $row['max_aid'];
            $newAID = $maxAID + 1;

            $customerEmail = mysqli_real_escape_string($connection, $this->customerEmail);
            $receiverName = mysqli_real_escape_string($connection, $this->receiverName);
            $receiverPhone = mysqli_real_escape_string($connection, $this->receiverPhone);
            $cityDistrictTown = mysqli_real_escape_string($connection, $this->cityDistrictTown);
            $additionalAddressInfo = mysqli_real_escape_string($connection, $this->additionalAddressInfo);
            $isDefault = $this->isDefault ? 1 : 0;
            if ($isDefault == 1) {
                $updateSql = "UPDATE shipping_address SET is_default = 0 WHERE customer_email = '$customerEmail'";
                mysqli_query($connection, $updateSql);
            }

            $sql = "INSERT INTO shipping_address (AID, customer_email, reciever_name, reciever_phone, city_district_town, additional_address_info, is_default) 
            VALUES ('$newAID', '$customerEmail', '$receiverName', '$receiverPhone', '$cityDistrictTown', '$additionalAddressInfo', '$isDefault')";

            if (mysqli_query($connection, $sql)) {
                // echo "Address added successfully";
            } else {
                echo "Error adding address: " . mysqli_error($connection);
            }

        }
        public function editAddress(){
            global $connection;
            $AID=mysqli_real_escape_string($connection, $this->AID);
            $customerEmail = mysqli_real_escape_string($connection, $this->customerEmail);
            $receiverName = mysqli_real_escape_string($connection, $this->receiverName);
            $receiverPhone = mysqli_real_escape_string($connection, $this->receiverPhone);
            $cityDistrictTown = mysqli_real_escape_string($connection, $this->cityDistrictTown);
            $additionalAddressInfo = mysqli_real_escape_string($connection, $this->additionalAddressInfo);
            $isDefault = $this->isDefault;
            if ($isDefault == 1) {
                $updateSql = "UPDATE shipping_address SET is_default = 0 WHERE customer_email = '$customerEmail'";
                mysqli_query($connection, $updateSql);
            }
            $sql="UPDATE shipping_address 
                SET  
                    reciever_name = '$receiverName', 
                    reciever_phone = '$receiverPhone', 
                    city_district_town = '$cityDistrictTown', 
                    additional_address_info = '$additionalAddressInfo', 
                    is_default = '$isDefault' 
                WHERE 
                    AID = '$AID' AND customer_email = '$customerEmail'";
            if (mysqli_query($connection, $sql)) {
                echo "Address edited successfully";
            } else {
                echo "Error adding address: " . mysqli_error($connection);
            }

        }
        public static function getListAddressByUser($userEmail){
            global $connection;
            $sql = "SELECT * FROM shipping_address WHERE customer_email = ?";
            $stmt = mysqli_prepare($connection, $sql);
            mysqli_stmt_bind_param($stmt, "s", $userEmail);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while ($row = mysqli_fetch_assoc($result)) {
                $address = new Address(
                    $row['customer_email'],
                    $row['AID'],
                    $row['reciever_name'],
                    $row['reciever_phone'],
                    $row['city_district_town'],
                    $row['additional_address_info'],
                    $row['is_default']
                );
                $addresses[] = $address;
            }
            
            return $addresses;
        }
    }

?>