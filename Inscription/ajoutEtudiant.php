<?php

	 require_once 'connection.php';
	 
	 if(isset($_POST))
	 {
		 extract($_POST);
		 $requete ="INSERT INTO apprenant VALUES('?','$nom','$sexe','$date','$gmail','$pwd')";
		 $resultat=mysqli_query($connecteur,$requete);
			
		 if($resultat)
		 {
			 echo "<script language='Javascript'>alert('Bien enregistre')</script>";
			 header('Location: ../Authentification/auth.php');
			 
		 }else
		 {
			 echo "<script language='Javascript'>alert('Erreur')</script>";
			 header('Location: ../Authentification/auth.php');
		 }
		 
		 mysqli_close($connecteur);
	 }

?>