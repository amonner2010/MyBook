<?php
    include("Assets/PHP/profile.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>MyBook | Profile</title>
        <link rel="stylesheet" href="Assets/Styles/profile.css">
    </head>

    <body>
        <!-- Top Bar -->
        <?php include("header.php"); ?>

        <!-- Cover Area -->
         <div id="cover-area">

            <!-- Top Profile Page -->
            <div id="profile-area">
                <div id="cover-image-area">
                    <img src="Assets/Test-Images/mountain.jpg" id="cover-image">
                    <img src="Assets/Test-Images/selfie.jpg" id="profile-image">
                </div>
                <div id="profile-name"><?php echo $full_name ?></div>
                
                <a href="index.php"><div id="menu-button">Timeline</div></a> | 
                <div id="menu-button">About</div> | 
                <div id="menu-button">Friends</div> | 
                <div id="menu-button">Photos</div> | 
                <div id="menu-button">Settings</div>
            </div>

            <!-- Content: Friends + Posts -->
            <div id="main-content-area">

                <!-- Friends Section -->
                <div id="friends-area">
                    <div id="friends-bar">
                        <div id="section-title">Friends</div>
                        <?php 
                            if($friends) {
                                foreach($friends as $FRIEND_ROW) {
                                    include("user.php");
                                }
                            }
                        ?>
                    </div>
                </div>

                <!-- Posts Section -->
                <div id="posts-area">

                    <!-- Post Box -->
                    <div id="post-box">
                        <form method="post">
                            <textarea name="post" id="text-area" placeholder="What's on your mind?"></textarea>
                            <input id="post-button" type="submit" value="post">
                        </form>
                    </div>

                    <!-- Profile Posts -->
                    <div id="post-bar">
                        <div id="section-title">Posts</div>
                        <?php 
                            if($posts) {
                                foreach($posts as $ROW) {

                                    // Grab User //
                                    $user = new User();
                                    $ROW_USER = $user->get_user($ROW['user_id']);

                                    // Post //
                                    include("post.php");
                                }
                            }
                        ?>
                    </div>
                </div>


            </div>
         </div>
    </body>
</html>
