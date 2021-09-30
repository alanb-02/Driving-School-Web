<?php
    //setting the values from tthe form into local variables
    $names = $_POST["name"];
    $usern = $_POST["username"];
    $passw = $_POST["password"];

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

    //query to select evry row from the users table where the username entered exists in the table
    $query = $conn->query("SELECT * FROM users WHERE username= '$usern'");
    //sql statement to insert the name, username and password entered into the user table
    $sql = "INSERT INTO users (name, username, password) VALUES ('$names', '$usern', '$passw')";

    //checks if there is a row in the table with the details entere from the form
    if($query->num_rows == 0){
        echo "New account created.";
        //rubs the sql statement from above
        $conn->query($sql);
        //redirect to login page
        header('Location: login-page.php');
    }
    //if there is a row with the details entered
    else{
        echo "This username already exists. Try again!";
        //redirects to the register page
        header('Location: register-page.php');
    }

    //connection is ended
    $conn->close();
?>