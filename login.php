<?php
    include("Assets/PHP/login.php");
?>

<html>
    <head>
        <title>MyBook | Login</title>
        <link rel="stylesheet" href="Assets/Styles/login.css">
    </head>

    <body>
        <!-- Top Bar -->
        <div id="top-bar">
            <div id="site-name">MyBook</div>
            <div id="signup-button">Signup</div>
        </div>

        <!-- Main Login Page -->
        <div id="login-page">
            Login to MyBook
            <form method="post">
                <input name="email" value="<?php echo $email ?>" type="text" id="text" placeholder="Email">
                <input name="password" value="<?php echo $password ?>" type="password" id="text" placeholder="Password">
                <input type="submit" id="button" value="Login">
            </form>
        </div>
    </body>
</html>