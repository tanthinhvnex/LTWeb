<?php
    require_once __DIR__ . '/../models/Model.php';

    class EditPersonalInfo {
        public function invoke() {
            require_once __DIR__ . '/../views/edit-personal-info.php';
        }
    }
    (new EditPersonalInfo())->invoke();
?>