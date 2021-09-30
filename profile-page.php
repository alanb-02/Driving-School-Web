<?php
    //session resumed
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

        <!-- div conatins the users table from the database displayed as <p> when logged in-->
        <div class="main-page-content-heading">
            <h2>User Profile</h2>
            <hr>
            <?php
                //connecting to database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "drivingschool";
                
                //creates connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                //checks for connection
                if($conn->connect_error){
                    die("ERROR: Could not connect." . $conn->connect_error);
                }

                //assigns vairable with session variable
                $user = $_SESSION['username'];
                //checks to see if user is logged in
                if(isset($_SESSION['log']) && $_SESSION['log'] == true){
                    //selectingname of user and username from user table where username in the table is the username from the session variable
                    $sql = "SELECT name, username, password FROM users WHERE username = '$user'";
                    //variable holds the result of the above sql statement
                    $result = $conn->query($sql);
                    
                    //if a row exists from the query that is runn - $result
                    if($result->num_rows > 0) {
                        //while loop prints the rows details in a formatted way
                        while($row = $result->fetch_assoc()) {
                            echo "<p style='text-align: center;'>" . "<span style='font-weight: bold;'>" . "Username: <br>" . "</span>" . $row["username"] . "<br><br>" . "<span style='font-weight: bold;'>" . "Name: <br>" . "</span>" . $row["name"] . "</p>";
                        }
                    }
                }
                //if the user is not logged in display the following message
                elseif(isset($_SESSION['log']) && $_SESSION['log'] == false){
                    echo "<p style='text-align: center;'>" . "You are  not logged in!!!" . "</p>";
                }
            ?>
        </div>

        <!--div contains the lessonsbooked displyed in the html page - show the bookings for the user-->
        <div style="padding-bottom: 2cm;">
            <h3 style='text-align: center;'>Your Lessons Booked</h3>
            <ol>
                <?php
                    //assigns vairable with session variable
                    $usern = $_SESSION["username"];

                    //connecting to the database
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "drivingschool";

                    //creates new connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    //checks connection
                    if($conn->connect_error){
                        die("ERROR: Could not connect." . $conn->connect_error);
                    }

                    //checks to see if user is logged in
                    if(isset($_SESSION['log']) && $_SESSION['log'] == true){
                        //selects from entire row fromlessonsbooked table where the username from the session variable is the same as the username in the table
                        $sql = "SELECT * FROM lessonsbooked WHERE username= '$usern'";
                        //variable holds the result of the above sql statement
                        $result = $conn->query($sql);

                        //checks if there more than 0 rows form the result of the select query above
                        if($result->num_rows > 0) {
                            //takes the lessons booked by the user and displays the details
                            while($row = $result->fetch_assoc()) {
                                echo "<p style='text-align: center;'>" . "<span style='font-weight: bold;'>" . "Type: " . "</span>" . $row["lessontype"] . "<span style='font-weight: bold;'>" . " Date: " . "</span>". $row["datebooked"] . "<p>";
                            }    
                        }
                    }
                    // checks if user is not logged in and displays message
                    elseif(isset($_SESSION['log']) && $_SESSION['log'] == false){
                        echo "<p style='text-align: center;'>" . "You are  not logged in!!!" . "</p>";
                    }
                ?>
            </ol>
        </div>

        <!--this div conatins form to update password for the current user-->
        <div class="contact-form">
            <h2>Change Your Password</h2>
            <form action="update-password.php" method="POST">
                    <label for="uppassword">Enter your new password:</label>
                    <input type="text" id="uppassword" name="newpassword" placeholder="Enter your new password...">
                    
                    <input type="submit" value="Change Password" name="change">
            </form>
        </div>

        <!--footer-->
        <div class="footer">
            <p><b>Website created by:</b> <br>Alan Byju</p>
        </div>
    </body>
</html>