<?php
    session_start();

    $usern = $_SESSION["username"];
    $type = $_POST["bookingtype"];
    $bdate = $_POST["bookingdate"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "drivingschool";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("ERROR: Could not connect." . $conn->connect_error);
    }

    if(isset($_SESSION['log']) && $_SESSION['log'] == true){
        $query = $conn->query("SELECT * FROM lessonsbooked WHERE username='$usern' AND datebooked= '$bdate'");
        $sql = "DELETE FROM lessonsbooked WHERE 'username'='$usern' AND 'datebooked'= '$bdate' AND 'lessontype'= '$type'";
 
        if($query->num_rows > 0){
            echo "Lessons have been removed!";
            $conn->query($sql);
            header('Location: profile-page.php');
        }
        else{
            /*header('Location: profile-page.php');*/
            echo "This date is not booked!";
        }
    }
    else{
        header('Location: login-page.php');
    }

    $conn->close();
?>