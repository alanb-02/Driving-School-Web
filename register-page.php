<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8"> 
        <title>Ultimate Driving School - Sign Up</title>
        <link rel="stylesheet" href="website-css.css">
    </head>

    <body>
        <!--this div conatins the logo and company name-->
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

        <!--this div contains the form to register a new user-->
        <div class="contact-form">
            <h2>Registration Form</h2>
            <h3>Create an account to book lessons.</h3>
            <form action="register-page-php.php" method="POST">
                <label for="lname">Your name</label>
                <input type="text" id="name" name="name" placeholder="Your name..." required>

                <label for="lusername">Your username</label>
                <input type="text" id="username" name="username" placeholder="Your username..." required>

                <label for="lpassword">Your password</label>
                <input type="password" id="password" name="password" placeholder="Your password..." required>

                <input type="submit" value="Create Account">
            </form>
        </div>

        <!--div contains link to login/out and remove user page-->
        <div>
            <p style="text-align: center; color: red;">If you have an account OR you just created an account you can log in here: <a href="login-page.php" style="font-weight: bold;">Login / Logout Here</a></p>
        </div>

        <!--footer-->
        <div class="footer">
            <p><b>Website created by:</b> <br>Alan Byju</p>
        </div>
    </body>
</html>