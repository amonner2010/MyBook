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


    // Posting //
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $post = new Post();
        $id = $_SESSION['mybook_user_id'];
        $result = $post->create_post($id, $_POST);

        if($result == "") {
            header("Location: profile.php");
            die;
        } else {
            echo "<div id='error'>";
            echo "The following errors occured: <br><br>";
            echo $result;
            echo "</div>";
        }
    }

    // Collect Posts //
    $post = new Post();
    $id = $_SESSION['mybook_user_id'];
    $posts = $post->get_posts($id);

    // Collect Friends //
    $user = new User();
    $id = $_SESSION['mybook_user_id'];
    $friends = $user->get_friends($id);