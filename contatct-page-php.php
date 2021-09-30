<?php
    //these 3 variables hold the the entered details from the form
    $names = $_POST["name"];
    $email = $_POST["email"];
    $messa = $_POST["message"];

    //connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "drivingschool";

    // creates connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //checks for connection
    if($conn->connect_error){
        die("ERROR: Could not connect." . $conn->connect_error);
    }

    //select query selects everything from the contacts database
    $query = $conn->query("SELECT * FROM contactform");
    //sql query inserts the inputed data from the form into the table
    $sql = "INSERT INTO contactform (name, email, message) VALUES ('$names', '$email', '$messa')";

    //shows that the message has gone through
    echo "Your message has been has been submitted. Now go back.";
    //running the sql 
    $conn->query($sql);

    //connection is ended
    $conn->close();
?>