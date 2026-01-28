<?php
    include("Classes/connect.php");
    include("Classes/signup-class.php");

    // User Variables //
    $first_name = "";
    $last_name = "";
    $email = "";

    // Post Gender Variable //
    $gender = "selected";
    $male = "";
    $female = "";
    $gender_style = "greyText";


    // Signup Process //
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $signup = new Signup();
        $result = $signup->evaluate($_POST);

        // Display Errors or Redirect //
        if($result != "") {
            echo "<div id='error'>";
            echo "The following errors occured: <br><br>";
            echo $result;
            echo "</div>";
        } else {
            header("Location: login.php");
            die;
        }


        // Save Data //
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];


        // Gender Selection //
        if(!isset($_POST['gender'])) {
            $_POST['gender'] = 'Gender';
        }

        if($_POST['gender'] == 'Male') {
            $male = "selected";
            $gender_style = "blackText";
            $female = "";
            $gender = "";
        } elseif($_POST['gender'] == 'Female') {
            $female = "selected";
            $gender_style = "blackText";
            $male = "";
            $gender = "";
        } else {
            $gender = "selected";
            $male = "";
            $female = "";
        }
    }