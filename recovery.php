<?php

		#Se connecter à la base de données

		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$db = 'hackathon';
		
		
		$mysqli = new mysqli($host,$user,$pass,$db) #Créer une connection
		
		#check connection
		if ($mysqli->connect_error) 
		{
	    	die("Connection failed: " . $mysqli->connect_error);

		} else
			{
				if (isset($_POST['submit']))
				{ 	#SI formulaire envoyé

					$Nom = $_POST['Nom'];
					$Prenom = $_POST['Prenom'];
					$Promo = $_POST['Promo'];
					$Email =$_POST['Email']; 
					$Titre = $_POST['Titre'];
					$Descriptif= $_POST['Descriptif'];

					$query = "INSERT INTO Participant (Nom, Prenom, Email, Promo, Titre, Descriptif) Values ('$Nom', '$Prenom', '$Email', '$Promo', '$Titre', $'Descriptif')";
					$result = mysqli_query($mysqli,$query);

				} else {
						echo "Echec d'envoi du formulaire"; # Si erreur
						}


			}


 ?>