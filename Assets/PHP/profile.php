<?php 
    session_start();
    unset($_SESSION['mybook_user_id']);
    include("Classes/connect.php");
    include("Classes/login-class.php");

    // Check User Logged In //
    if(isset($_SESSION['mybook_user_id']) && is_numeric($_SESSION['mybook_user_id'])) {
        $id = $_SESSION['mybook_user_id'];
        $login = new Login();
        $result = $login->check_login($id);

        if($result) {
            
            // Retrieve User Data //
            echo "Everything is fine";

        } else {
            header("Location: login.php");
            die;
        }
    } else {
        header("Location: login.php");
        die;
    }

