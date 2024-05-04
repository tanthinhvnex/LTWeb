<?php
require_once __DIR__ . '/../models/Payment.php';  
require_once __DIR__ . '/../models/Database.php';   

class PaymentModel {
    public function getBillInfo($id) {
        global $connection;  
        $sql = "SELECT 
                    SUM(b.quantity) AS numberOfItem, 
                    SUM(b.quantity * (p.listed_unit_price - (p.listed_unit_price * p.discount * 0.01))) AS totalPrice
                FROM 
                    bill_have_product b
                INNER JOIN 
                    product p ON b.PID = p.PID AND b.size = p.size
                WHERE 
                    b.BID = ?";

        $stmt = mysqli_prepare($connection, $sql);
        if (!$stmt) {
            throw new Exception("Prepare statement failed: " . mysqli_error($connection));
        }

        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            if ($row && $row['numberOfItem'] > 0) {
                return new PaymentInfo($row['numberOfItem'], $row['totalPrice']);
            } else {
                return new PaymentInfo(0, 0);
            }
        } else {
            throw new Exception("Execute statement failed: " . mysqli_error($connection));
        }

        
    }
}
?>

