<?php
    session_start();
    include("Classes/connect.php");
    include("Classes/user-class.php");
    include("Classes/post-class.php");
    include("Classes/login-class.php");

    // Check if User is Logged In //
    $login = new Login();
    $user_data = $login->check_login($_SESSION['mybook_user_id']);

    // Grab User Information - Variables //
    $full_name = $user_data['first_name'] . " " . $user_data['last_name'];