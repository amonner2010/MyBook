<?php
    session_start();
    include("Classes/connect.php");
    include("Classes/login-class.php");

    // User Variables //
    $email = "";
    $password = "";


    // Login Process //
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $login = new Login();
        $result = $login->evaluate($_POST);

        // Display Errors or Redirect //
        if($result != "") {
            echo "<div id='error'>";
            echo "The following errors occured: <br><br>";
            echo $result;
            echo "</div>";
        } else {
            header("Location: profile.php");
            die;
        }


        // Check Data //
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
