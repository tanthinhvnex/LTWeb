<?php
    class TrimAdminAddProductInput {
        public function handle() {
            $_POST['name'] = trim($_POST['name']);
            $_POST['price'] = trim($_POST['price']);
            $_POST['quantity'] = trim($_POST['quantity']);
            $_POST['description'] = trim($_POST['description']);
            $_POST['discount'] = trim($_POST['discount']);
            $_POST['size'] = trim($_POST['size']);
            $_POST['similar'] = trim($_POST['similar']);
            $_POST['image'] = trim($_POST['image']);
        }
    }
?>