<?php
		$errorMessage='';
	$ok=0;
	
	
	if(isset($_POST))
	{
		$connecteur=mysqli_connect("localhost","root","","pfe")or die(mysqli_connect_error());
		$resultat=mysqli_query($connecteur,'SELECT * FROM apprenant');
		$login ="afzjtdyj";
		while($donnee=mysqli_fetch_assoc($resultat))
		{
				extract($donnee);
				
				if(!empty($_POST['nom']) && !empty($_POST['pwd']))
			    {
					if($_POST['nom']==$nom && $_POST['pwd']==$pwd)
					{
						$ok=1;
						$login=$nom;
					}
					
			   }
		}
		
		if($ok==1)
		{
		session_start();
			  //on ouvre la session 
				$_SESSION['NOM']=$login;
			  //redirection vers le fichier accueil.php
			 
				header('Location:../Accueil/Pageaccuiel.php');
						
		}else
		{
			header('Location: auth.php');
			$errorMessage='Nom ou Mot de passe incorrect';
			$_SESSION['erreur']=$errorMessage;
		}
			
			
		
		
	}
	mysqli_free_result($resultat);
		mysqli_close($connecteur);
	
?>