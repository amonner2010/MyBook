<?php 
    session_start();
    include("Classes/connect.php");
    include("Classes/user.php");
    include("Classes/login-class.php");

    // Check User Logged In //
    if(isset($_SESSION['mybook_user_id']) && is_numeric($_SESSION['mybook_user_id'])) {
        $id = $_SESSION['mybook_user_id'];
        $login = new Login();
        $result = $login->check_login($id);

        if($result) {
            
            // Retrieve User Data //
            $user = new User();
            $user_data = $user->get_user($id);

            if(!$user_data) {
                header("Location: login.php");
                die;
            }

        } else {
            header("Location: login.php");
            die;
        }
    } else {
        header("Location: login.php");
        die;
    }

    // Grab User Information - Variables //
    $full_name = $user_data['first_name'] . " " . $user_data['last_name'];