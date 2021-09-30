<?php
    //session resumed
    session_start();
    
    //connecting to the database
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

    //when the the user click the button with name submit
    if(isset($_POST["submit"])){
        //variable are set with the values taken from the form
        $usern = $_POST["username"];
        $passw = $_POST["password"];

        //query that selects every row in the users table that have the same username password and from the form input
        $result = $conn->query("SELECT * FROM users WHERE username = '$usern' AND password = '$passw'");

        //if there are no rows as a result of teh abouve query
        if($result->num_rows == 0){
            echo "you are not logged in";
            //redirected to the login page
            header('Location: login-page.php');
        }
        //if there are rows
        else{
            echo "You have logged in!";
            //session values set - username and log(boolean)
            $_SESSION['username'] = $usern;
            $_SESSION['log'] = true;
            //redirected to profile page
            header('Location: http://localhost/CA2/profile-page.php');
        }
    }

    //connection is ended
    $conn->close();
?>