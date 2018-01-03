<?php

class Super_admin {

    public function logout() {
        unset($_SESSION['admin_name']);
        unset($_SESSION['admin_id']);

        header("Location: index.php");
    }

}
