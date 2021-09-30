<?php
    /*session is resumed*/
    session_start();

    /*these 3 variables hold the user's username, booking type, and date from form*/
    $usern = $_SESSION["username"];
    $type = $_POST["bookingtype"];
    $bdate = $_POST["bookingdate"];

    /*connecting to database */
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "drivingschool";
    
    /*creates connection */
    $conn = new mysqli($servername, $username, $password, $dbname);
    /*checks for connection */
    if($conn->connect_error){
        die("ERROR: Could not connect." . $conn->connect_error);
    }

    /*checks if the user is logged on*/
    if(isset($_SESSION['log']) && $_SESSION['log'] == true){
        /*selecting values from table*/
        $query = $conn->query("SELECT * FROM lessonsbooked WHERE datebooked= '$bdate'");
        /*sql stament to assign the values from the form into the users table*/
        $sql = "INSERT INTO lessonsbooked (username, lessontype, datebooked) VALUES ('$usern', '$type', '$bdate')";
 
        /*checks if the date selected is already booked*/
        if($query->num_rows == 0){
            echo "Lessons have been booked!";
            //running the sql
            $conn->query($sql);
            //going to the profile page to show the user's booked lessons
            header('Location: profile-page.php');
        }
        //if already booked
        else{
            // going to the profile page to show users' booked lessons
            header('Location: profile-page.php');
            echo "This date is already booked!";
        }
    }
    //if user not logged in, redirected to login page
    else{
        header('Location: login-page.php');
    }

    // connection is ended
    $conn->close();
?>