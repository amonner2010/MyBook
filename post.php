<?php 
    // Variables //
    $post_full_name = $ROW_USER['first_name'] . " " . $ROW_USER['last_name'];

    // Profile Pic //
    $post_profile_pic = "";
    if($ROW_USER['gender'] == "Male") {
        $post_profile_pic = "Assets/Test-Images/user_male.jpg";
    } else if($ROW_USER['gender'] == "Female") {
        $post_profile_pic = "Assets/Test-Images/user_female.jpg";
    }
?>

<div id="post">
    <div>
        <img src="<?php echo $post_profile_pic ?>" id="post-icon">
    </div>
    <div id="post-message">
        <div id="post-name"><?php echo $post_full_name ?></div>
        <?php echo $ROW['post'] ?>
        <div id="post-options">
            <a>Like</a> . <a>Comment</a> . <span><?php echo $ROW['date'] ?></span>
        </div>
    </div>
</div>