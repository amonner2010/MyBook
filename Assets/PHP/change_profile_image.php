<?php
    session_start();
    include("Classes/connect.php");
    include("Classes/user-class.php");
    include("Classes/post-class.php");
    include("Classes/login-class.php");

    // Check if User is Logged In //
    $login = new Login();
    $user_data = $login->check_login($_SESSION['mybook_user_id']);

    // Image Uploading //
    if($_SERVER['REQUEST_METHOD'] == "POST") {

        if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != "") {

            // Check File Type for Image //
            if($_FILES['file']['type'] == "image/jpeg") {
                
                // Check Size //
                $allowed_size = 3 * (1024 * 1024);
                if($_FILES['file']['size'] < $allowed_size) {

                    $filename = "Assets/Uploads/" . $_FILES['file']['name'];
                    move_uploaded_file($_FILES['file']['tmp_name'], $filename);

                    if(file_exists($filename)) {
                        $DB = new Database();
                        $user_id = $user_data['user_id'];
                        $query = "update users set profile_image = '$filename' where user_id = '$user_id' limit 1";
                        $DB->save($query);

                        header(("Location: profile.php"));
                    }
                    
                } else {
                    echo "<div id='error'>";
                    echo "The following errors occured: <br><br>";
                    echo "Only images of Jpeg type are allowed";
                    echo "</div>";
                }

            } else {
                echo "<div id='error'>";
                echo "The following errors occured: <br><br>";
                echo "Only images of Jpeg type are allowed";
                echo "</div>";
            }
        } else {
            echo "<div id='error'>";
            echo "The following errors occured: <br><br>";
            echo "Please add a valid image.";
            echo "</div>";
        }
    }