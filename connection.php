<?php
    $hostname = '127.0.0.1';
    $username = 'root';
    $password = 'root';
    $db = 'hackathon';

    $dbconnect=mysqli_connect($hostname,$username,$password,$db);

    if ($dbconnect->connect_error) {
        die("Database connection failed: " . $dbconnect->connect_error);
    }

    if(isset($_POST['submit'])) {
        $Firstname=$_POST['Firstname'];
        $Lastname=$_POST['Lastname'];
        $Email=$_POST['Email'];
        $Promotion=$_POST['Promotion'];
        $Project=$_POST['Project'];
        $Comment=$_POST['Comment'];

        $query = "INSERT INTO Participant
        VALUES ('$Firstname', '$Lastname', '$Email', '$Promotion', '$Project', '$Comment')";

        if (!mysqli_query($dbconnect, $query)) {
            die('An error occurred when submitting your review.');
        } else {
            echo "Participant ajouté.";
        }

    }
?>
