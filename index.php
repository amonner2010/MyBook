<?php
    include("Assets/PHP/index.php");
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

            <!-- Content: Profile + Posts -->
            <div id="main-content-area">

                <!-- Profile Section -->
                <div id="timeline-area">
                    <div id="timeline-bar">
                        <img src="Assets/Test-Images/selfie.jpg" id="timeline-profile-image">
                        <div id="timeline-name"><a href="profile.php"><?php echo $full_name ?></a></div>
                    </div>
                </div>

                <!-- Posts Section -->
                <div id="posts-area">

                    <!-- Post Box -->
                    <div id="post-box">
                        <textarea id="text-area" placeholder="What's on your mind?"></textarea>
                        <input id="post-button" type="submit" value="post">
                    </div>

                    <!-- Profile Posts -->
                    <div id="post-bar">
                        <div id="section-title">Posts</div>
                        <div id="post">
                            <div>
                                <img src="Assets/Test-Images/user1.jpg" id="post-icon">
                            </div>
                            <div id="post-message">
                                <div id="post-name">First Guy</div>
                                <div id="post-text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                                <div id="post-options">
                                    <a>Like</a> . <a>Comment</a> . <span>April 23 2020</span>
                                </div>
                            </div>
                        </div>

                        <div id="post">
                            <div>
                                <img src="Assets/Test-Images/user1.jpg" id="post-icon">
                            </div>
                            <div id="post-message">
                                <div id="post-name">First Guy</div>
                                <div id="post-text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </div>
                                <div id="post-options">
                                    <a>Like</a> . <a>Comment</a> . <span>April 23 2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
         </div>
    </body>
</html>
