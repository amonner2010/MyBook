<?php
    include("Assets/PHP/change_profile_image.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>MyBook | Change Profile Image</title>
        <link rel="stylesheet" href="Assets/Styles/profile.css">
    </head>

    <body>
        <!-- Top Bar -->
        <?php include("header.php"); ?>

        <!-- Cover Area -->
         <div id="cover-area">

            <!-- Content: Profile + Posts -->
            <div id="main-content-area">

                <!-- Posts Section -->
                <div id="posts-area">

                    <!-- Post Box -->
                    <form method="post" enctype="multipart/form-data">
                        <div id="post-box">
                            <input type="file" name="file">
                            <input id="upload-button" type="submit" value="Upload">
                        </div>
                    </form>

                    
                </div>


            </div>
         </div>
    </body>
</html>
