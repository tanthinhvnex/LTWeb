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
        private function generateToken($length = 32) {
            return bin2hex(random_bytes($length));
        }
        private function sendResetEmail($email, $token) {
            $resetLink = "http://localhost/BTL_LTW/LTWeb/reset_password/new_password?token=$token";
            $subject = "reset password - BTLLTW - HCMUT";
            $body = "go to that link to reset your password:
            $resetLink";
            $headers = "From: sender\'s email";
            
            if (mail($email, $subject, $body, $headers)) {
                // echo "Email successfully sent to $email...";
            } else {
                echo "Email sending failed...";
            }
            

        }
        function addTokenData($email){
            global $connection;
            $token=$this->generateToken();
            $sql_check = "SELECT token FROM reset_token WHERE customer_email = '$email' LIMIT 1";
            $result_check = mysqli_query($connection, $sql_check);
            if (mysqli_num_rows($result_check) > 0) {
                // User already has a token, delete it
                $row = mysqli_fetch_assoc($result_check);
                $existingToken = $row["token"];
            
                $sql_delete = "DELETE FROM reset_token WHERE customer_email = '$email'";
                if (mysqli_query($connection, $sql_delete)) {
                    // echo "Existing token deleted successfully";
                } else {
                    echo "Error deleting existing token: " . mysqli_error($connection);
                }
            }
            $checkEmailQuery = "SELECT * FROM user WHERE email = '$email'";
            $result = $connection->query($checkEmailQuery);
        
            if ($result && $result->num_rows > 0) {
                // Email exists in the user table
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $expiryTimestamp = date('Y-m-d H:i:s', strtotime('+1 hour'));
                // Insert the token into the reset_token table
                $insertTokenQuery = "INSERT INTO reset_token (customer_email, token, expiry_time) 
                                     VALUES ('$email', '$token', '$expiryTimestamp')";
        
                if ($connection->query($insertTokenQuery) === TRUE) {
                    // echo "New token added to database successfully";
                    $this->sendResetEmail($email,$token);
                } else {
                    $_SESSION['errorMessage'] = "Error adding new token to database: " . $connection->error;
                }
            } else {
                // Email does not exist in the user table
                $_SESSION['errorMessage'] = "User with email $email does not exist";
            }
        
        }
        function handleResetPassword($token,$password){
            global $connection;
            $sql = "SELECT * FROM reset_token WHERE token = '$token' AND expiry_time > NOW()";
            $result = $connection->query($sql);
            if ($result && $result->num_rows > 0) {
                // Token is valid, update the user's password
                $row = $result->fetch_assoc();
                $email = $row['customer_email'];

                // Update the user's password
                $salt = "fc45c92ac5ad37b42824ea724d2f8f32";
                $hashedPassword = hash('sha256', $password . $salt);
                $updatePasswordSql = "UPDATE user SET encoded_password = '$hashedPassword' WHERE email = '$email'";
                if ($connection->query($updatePasswordSql) === TRUE) {
                    $_SESSION['errorMessage']= "Password updated successfully";
                    // Delete the token from the database
                    $deleteTokenSql = "DELETE FROM reset_token WHERE token = '$token'";
                    $connection->query($deleteTokenSql);
                    header("http://localhost/BTL_LTW/LTWeb/signin");
                } else {
                    $_SESSION['errorMessage']= "Error updating password: " . $connection->error;
                }
            } else {
                // Token is not valid or expired
                $_SESSION['errorMessage'] = "Invalid or expired token";
            }

        }
        
    }
?>
