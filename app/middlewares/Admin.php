<?php
    class Admin {
        public function handle() {
            if ($_SESSION['user']->role != 'admin') {
                abort(403);
                exit();
            }
        }
    }
?>