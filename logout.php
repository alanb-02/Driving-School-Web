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

    ///when the the user click the button with name logout
    if(isset($_POST["logout"])){
        //session values are set - set to indicate not logged in
        $_SESSION['username'] = "";    
        $_SESSION['log'] = false;
        //redirect to profile page
        header('Location: profile-page.php');
    }

    //connection is ended
    $conn->close();
?>