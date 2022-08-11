<?php

	 require_once 'connection.php';
	 
	 if(isset($_POST))
	 {
		 extract($_POST);
		 $requete ="INSERT INTO professionnel VALUES('?','$nom','$sexe','$date','$gmail','$pwd')";
		 $resultat=mysqli_query($connecteur,$requete);
			
		 if($resultat)
		 {
			 echo "<script language='Javascript'>alert('Bien enregistre')</script>";
			 header('Location: inscriptionPr.php');
			 
		 }else
		 {
			 echo "<script language='Javascript'>alert('Erreur')</script>";
			 header('Location: inscriptionPr.php');
		 }
		 
		 mysqli_close($connecteur);
	 }

?>