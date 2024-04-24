<?php
    require_once __DIR__ . '/CreditCard.php';
    require_once __DIR__ . '/Database.php';
    require_once __DIR__ . '/User.php';
    require_once __DIR__ . '/Address.php';
    class ProfileModel {
        public function getUserByEmail($email) {
            global $connection; 
            $userQuery = "SELECT email, fullname, role, phone FROM user WHERE email = '". mysqli_real_escape_string($connection, $email) ."'";
            $result = mysqli_query($connection, $userQuery);
            if ($row = mysqli_fetch_assoc($result)) {
                return new User($row['email'], $row['fullname'], $row['role'], $row['phone']);
            }
            return null;
        }
    
        public function getCreditCardsByEmail($email) {
            global $connection;
            $creditCards = [];
            $cardQuery = "SELECT card_number, CVV, exp_date, fullname, is_default FROM credit_card WHERE customer_email = '". mysqli_real_escape_string($connection, $email) ."'";
            $result = mysqli_query($connection, $cardQuery);
            while ($row = mysqli_fetch_assoc($result)) {
                $creditCards[] = new CreditCard($row['card_number'], $row['CVV'], $row['exp_date'], $row['fullname'], $row['is_default']);
            }
            return $creditCards;
        }

        public function getAddressesByEmail($email) {
            global $connection;
            $addresses = [];
    
            $query = "SELECT * FROM shipping_address WHERE customer_email = '" . mysqli_real_escape_string($connection, $email) . "'";
            $result = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                $addresses[] = new Address(
                    $row['customer_email'],
                    $row['AID'],
                    $row['reciever_name'],
                    $row['reciever_phone'],
                    $row['city_district_town'],
                    $row['additional_address_info'],
                    $row['is_default']
                );
            }
            return $addresses;
        }

        public function updateUserInfo($currentEmail, $email, $fullname, $phone, $password) {
            global $connection;
            $currentEmail = mysqli_real_escape_string($connection, $currentEmail);
            $email = mysqli_real_escape_string($connection, $email);
            $fullname = mysqli_real_escape_string($connection, $fullname);
            $phone = mysqli_real_escape_string($connection, $phone);
    
  
            $sql = "UPDATE user SET ";
            $updates = [];
    

            if ($email !== $currentEmail) {
                $updates[] = "email = '$email'";
            }
            if (!empty($fullname)) {
                $updates[] = "fullname = '$fullname'";
            }
            if (!empty($phone)) {
                $updates[] = "phone = '$phone'";
            }
            if (!empty($password)) {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $updates[] = "encoded_password = '$hashedPassword'";
            }
    
            if (empty($updates)) {
                echo "No updates to perform";
                return;
            }
    
            $sql .= join(', ', $updates);
            $sql .= " WHERE email = '$currentEmail'";
    

            if (mysqli_query($connection, $sql)) {
                $_SESSION['user'] = new User($email, $fullname, 'Customer', $phone);
                echo "Record updated successfully";
                echo "<script>window.location.href = '/BTL_LTW/LTWeb/profile';</script>";
            } else {
                echo "Error updating record: " . mysqli_error($connection);
            }
        }
    }
?>
