<?php 
    // Variables //
    $friend_full_name = $FRIEND_ROW['first_name'] . " " . $FRIEND_ROW['last_name'];

    // Profile Pic //
    $friend_profile_pic = "Assets/Test-Images/user_male.jpg";
    if($FRIEND_ROW['gender'] == "Male") {
        $friend_profile_pic = "Assets/Test-Images/user_male.jpg";
    } else if($FRIEND_ROW['gender'] == "Female") {
        $friend_profile_pic = "Assets/Test-Images/user_female.jpg";
    }
?>

<div id="friend">
    <img id="friend-image" src="<?php echo $friend_profile_pic ?>">
    <div id="friend-name"><?php echo $friend_full_name ?></div>
</div>