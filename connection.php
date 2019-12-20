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
        $Firstname = mysqli_real_escape_string($_POST['$Firstname']);         
        $Lastname=mysqli_real_escape_string($_POST['Lastname']);
        $Email=mysqli_real_escape_string($_POST['Email']);
        $Promotion=mysqli_real_escape_string($_POST['Promotion']);
        $Project=mysqli_real_escape_string($_POST['Project']);
        $Comment=mysqli_real_escape_string($_POST['Comment']);

        $query = "INSERT INTO Participant
        VALUES ('$Firstname', '$Lastname', '$Email', '$Promotion', '$Project', '$Comment')";

        if (!mysqli_query($dbconnect, $query)) {
            die('An error occurred when submitting your review.');
        } else {
            echo "Participant ajouté.";
        }

    }
?>
