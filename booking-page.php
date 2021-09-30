<?php
    //session resumed
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"> 
        <title>Ultimate Driving School - Lessons</title>
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

        <!--This div conatins the table of types of vehicles-->
        <div>
            <h2 style="text-align: center;">Booking Lessons</h2>
            <hr>
            <table class="booking-table">
                <tr>
                    <th>Category</th>
                    <th>Vehicle Type</th> 
                </tr>
                <tr>
                    <td>A</td>
                    <td>Mopeds, Motorcycles, Light quadricycles, and Tricycles.</td>
                </tr>
                <tr>
                    <td>B</td>
                    <td>Vehicles (other than motorcycles, mopeds, work vehicles or land tractors) having a MAM1 not exceeding 3,500 kg. having passenger accommodation for not more than 8 persons and where the MAM1 of the trailer is not greater than 750 kg. or where the combined MAM1 of the towing vehicle and the trailer does not exceed 3,500 kg.</td>
                </tr>
                <tr>
                    <td>C</td>
                    <td>Vehicles (other than work vehicles or land tractors) having a MAM¹ exceeding 3,500 kg, designed and constructed for the carriage of no more than eight passengers in addition to the driver and where the MAM¹ of the trailer is not greater than 750 kg.</td>
                </tr>
                <tr>
                    <td>D</td>
                    <td>Vehicles designed and constructed for the carriage of more than eight passengers in addition to the driver and where the MAM¹ of the trailer is not greater than 750 kg.</td>
                </tr>
                <tr>
                    <td>W</td>
                    <td>Work vehicles and land tractor with or without a trailer.</td>
                </tr>

            </table>
        </div>

        <!--this div contains the for to booka a driving lesson by selecting a type and a date-->
        <div class="contact-form">
            <h2>Booking Lessons</h2>
            <p>You can book a lesson here <span style="color: red;">(Important: if you would like to cancel, please contact us via phone, email, or contact form.)</span>.</p>
            <form action="booking-page-php.php" method="POST">
                    <label for="lessontype">Choose catagory:</label>
                    <select name="bookingtype">
                        <option value="A">A - </option>
                        <option value="B">B - </option>
                        <option value="C">C - </option>
                        <option value="D">D - </option>
                        <option value="W">W - </option>
                    </select>
                    <br>
                    <label for="bookingdate">When do you want to book</label>
                    <input type="date" id="" name="bookingdate">

                    <input type="submit" value="Submit Booking">
            </form>
        </div>

        <!--footer-->
        <div class="footer">
            <p><b>Website created by:</b> <br>Alan Byju</p>
        </div>
</html>