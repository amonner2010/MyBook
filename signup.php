<?php
    include("Assets/PHP/signup.php");
?>

<html>
    <head>
        <title>MyBook | Signup</title>
        <link rel="stylesheet" href="Assets/Styles/login.css">
    </head>

    <body>
        <!-- Top Bar -->
        <div id="top-bar">
            <div id="site-name">MyBook</div>
            <div id="signup-button">Login</div>
        </div>

        <!-- Main Signup Page -->
        <div id="login-page">
            Signup to MyBook

            <form method="post" action="">
                <input value="<?php echo $first_name ?>" name="first_name" type="text" id="text" placeholder="First Name">
                <input value="<?php echo $last_name ?>" name="last_name" type="text" id="text" placeholder="Last Name">

                <select name="gender" id="text" onchange="this.className=this.options[this.selectedIndex].className" class="<?php echo $gender_style ?>" style="padding: 2px;">
                    <option <?php echo $gender ?> disabled="disabled" class="greyText">Gender</option>
                    <option <?php echo $male ?> class="blackText">Male</option>
                    <option <?php echo $female ?> class="blackText">Female</option>
                </select>

                <input value="<?php echo $email ?>" name="email" type="text" id="text" placeholder="Email">
                <input name="password" type="password" id="text" placeholder="Password">
                <input name="password2" type="password" id="text" placeholder="Retype Password">
                <input type="submit" id="button" value="Signup">
            </form>
        </div>
    </body>
</html>