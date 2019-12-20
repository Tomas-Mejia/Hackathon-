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

        $Firstname=mysqli_real_escape_string($_POST['Firstname']);
        $Lastname=mysqli_real_escape_string($_POST['Lastname']);
        $Email=mysqli_real_escape_string($_POST['Email']);
        $Promotion=mysqli_real_escape_string($_POST['Promotion']);
        $Project=mysqli_real_escape_string($_POST['Project']);
        $Descriptif=mysqli_real_escape_string($_POST['Descriptif']);
        
        $InputNomMember1=mysqli_real_escape_string($_POST['$InputNomMember1']);
        $InputPrenomMember1=mysqli_real_escape_string($_POST['$InputPrenomMember1']);

      
            
        $query = "INSERT INTO Participant
        VALUES ('$Firstname', '$Lastname', '$Email', '$Promotion', '$Project', '$Descriptif')";
        
        $query2 = "INSERT INTO Participant
        VALUES ('$InputPrenomMember1', '$InputNomMember1', '$Email', '$Promotion', '$Project', '$Descriptif')";

        if (!mysqli_query($dbconnect, $query)) {
            die('Error ajout 1 ');
        } else {
            echo "Participant ajouté.";
        }
        if (!mysqli_query($dbconnect, $query2)) {
            die('Error ajout 2 ');
        } else {
            echo "Participant ajouté.";
        }

    }
?>
