<?php
	
	require_once 'connection.php';
	 
	$requete ="""INSERT INTO tache VALUES('tacheA1', 'tacheA1', 'Activite1' , '27')""";
	$resultat=mysqli_query($connecteur,$requete);

	if($resultat)
	{
	 echo "<script language='Javascript'>alert('Bien enregistre')</script>";
	// header('Location: inscriptionEt.php');
	 
	}else
	{
	 echo "<script language='Javascript'>alert('Erreur')</script>";
	 //header('Location: inscriptionEt.php');
	}

	mysqli_close($connecteur);
	
?>

<script>
	
	alert(x);
</script>