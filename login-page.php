<?php
//session started
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8"> 
        <title>Ultimate Driving School - Sign Up</title>
        <link rel="stylesheet" href="website-css.css">
    </head>

    <body>
        <!--dive contains the logo and company name-->
        <div class="header1">
            <div class="header1-logo">
                <img id="logo" src="logo.png" alt="Ultimate Driving School - Home">
            </div>
            <div class="header1-txt">
                <h1 id="company">Ultimate Driving School</h1>
            </div>
        </div>

        <!--this div contains navigatiion bar and its links-->
        <div class="navigation">
            <a href="main-page.html">Home</a>
            <a href="booking-page.php">Lessons</a>
            <a href="contact-page.html">Contact</a>
            <a href="rsa-page.html">RSA</a>
            <a href="http://localhost/CA2/profile-page.php">Profile</a>
            <a class="nav-link-right" href="http://localhost/CA2/register-page.php" style="background-color: red;">Regitser / Login / Logout</a>
        </div>

        <!--div contains the login form-->
        <div class="contact-form">
            <h2>Log in</h2>
            <h3>Log into your account.</h3>
            <form action="login-page-php.php" method="POST">
                <label for="lusername">Your username</label>
                <input type="text" id="username" name="username" placeholder="Your username..." required>

                <label for="lpassword">Your password</label>
                <input type="password" id="password" name="password" placeholder="Your password..." required>
            
                <input type="submit" value="Log in" name="submit">
            </form>
        </div>

        <!--div contsin the form to logout-->
        <div class="contact-form">
            <h2>Logout</h2>
            <form action="logout.php" method="POST">
                <input type="submit" value="Log out" name="logout">
            </form>
        </div>

        <!--div contains te=he form to remove account-->
        <div class="contact-form">
            <h2>Remove Account</h2>
            <form action="remove-user-php.php" method="POST">
                <label for="lusername">Your username</label>
                <input type="text" id="username" name="username" placeholder="Your username..." required>

                <label for="lpassword">Your password</label>
                <input type="password" id="password" name="password" placeholder="Your password..." required>

                <input type="submit" value="Remove" name="remove">
            </form>
        </div>

        <!--footer-->
        <div class="footer">
            <p><b>Website created by:</b> <br>Alan Byju</p>
        </div>
    </body>
</html>
