<?php
    $hostname = '127.0.0.1';
    $username = 'root';
    $password = 'root';
    $db = 'hackathon';
  # Créer une connection
    $dbconnect=mysqli_connect($hostname,$username,$password,$db);

    if ($dbconnect->connect_error) {
        die("Database connection failed: " . $dbconnect->connect_error); #Erreur d'accés à la base de données
    }

#Envoi du formulaire et récupération d'informations
    if(isset($_POST['submit'])) {

        $Firstname=$_POST['Firstname'];
        $Lastname=$_POST['Lastname'];
        $Email=$_POST['Email'];
        $Promotion=$_POST['Promotion'];
        $Project=$_POST['Project'];
        $Descriptif=$_POST['Descriptif'];
      
        $query = "INSERT INTO Participant
        VALUES ('$Firstname', '$Lastname', '$Email', '$Promotion', '$Project', '$Descriptif')";

        if (!mysqli_query($dbconnect, $query)) {
            die('An error occurred when submitting your review.');
        } else {
            echo "Participant ajouté.";
        }

    }
?>
