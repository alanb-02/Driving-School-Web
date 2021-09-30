<?php
    //session resumed
    session_start();

    //setting the session varaible and input form to a local varaiable
    $usern = $_SESSION["username"];
    $newpass = $_POST["newpassword"];
 
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

    //checks to see if user is logged in
    if(isset($_SESSION['log']) && $_SESSION['log'] == true){
        //select query to get all rows in the database where the username value here is the sme as in the tabel 
        $query = $conn->query("SELECT * FROM users WHERE username= '$usern'");
        //query to update the users table by setting the password column with the new password, where the usernames are same
        $sql = "UPDATE users SET password= '$newpass' WHERE username= '$usern'";
 
        //checks if there are rows
        if($query->num_rows > 0){
            echo "password updated";
            //running the sql statement
            $conn->query($sql);
            //redirects the profile page
            header('Location: profile-page.php');
        }
        //if there are no rows
        else{
            //redirects the profile page
            header('Location: profile-page.php');
            echo "There is no account with that username and password";
        }
    }
    // if user is logged out
    else{
        //redirect to the login page
        header('Location: login-page.php');
    }

    //connection is ended
    $conn->close();
?>