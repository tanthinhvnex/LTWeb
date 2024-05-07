<?php
class ReviewModel {
    public $RID;
    public $customer_email;
    public $star;
    public $PID; 
    public $content;
    public $fullname;

    public function __construct($RID, $customer_email, $star, $content, $fullname, $PID) {
        $this->RID = $RID;
        $this->customer_email = $customer_email;
        $this->star = $star;
        $this->content = $content;
        $this->fullname = $fullname;
        $this->PID = $PID;
    }
    public function saveReview() {
        global $connection;
        $customer_email = mysqli_real_escape_string($connection, $this->customer_email);
        $star = mysqli_real_escape_string($connection, $this->star);
        $content = mysqli_real_escape_string($connection, $this->content);
        $PID = mysqli_real_escape_string($connection, $this->PID);
        $sql = "SELECT MAX(RID) AS max_rid FROM review";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        $maxAID = $row['max_rid'];
        $this->RID = $maxAID + 1;
        $RID=mysqli_real_escape_string($connection, $this->RID);
        // Assuming you have a user table with a column 'fullname' based on the 'customer_email'
        // Adjust this SQL query according to your database schema

        $sql = "INSERT INTO review (RID, customer_email, star, content, PID) 
        VALUES ('$RID', '$customer_email', '$star', '$content', '$PID')";
        $result = mysqli_query($connection, $sql);
        if ($result) {
            echo "success add your review";
            return;
        }
        echo "server error";


    }

    public static function getReviewsByProductId($PID) {
        global $connection; 
        $PID = mysqli_real_escape_string($connection, $PID); 
        $sql = "SELECT review.RID, review.customer_email, review.star, review.content, user.fullname
                FROM review
                JOIN user ON review.customer_email = user.email
                WHERE review.PID = '$PID'
                ORDER BY review.RID ASC";
        $result = mysqli_query($connection, $sql);
        $reviews = array();
        while ($row = mysqli_fetch_assoc($result)) {

            $review = new ReviewModel(
                $row['RID'],
                $row['customer_email'],
                $row['star'],
                $row['content'],
                $row['fullname'],
                $PID 
            );
            $reviews[] = $review;
        }
        return $reviews;
    }
}
?>
