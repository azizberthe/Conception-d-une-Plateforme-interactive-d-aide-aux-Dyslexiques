<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tache 1 Activite 1</title>
	<style>
     
    </style>
</head>
<body>
	<div class="div" style="background-image: url(t1.jpg);">
		<div class="cont container">
			<div class="row offset-3">
				<div class="col">
					<img src="qst11.png" width="500">
				</div>	
			</div>
			<div class="row offset-2">
				<div class="col">
					<button  onclick ="playtest('1');"class="btn">
						<img src="cerSad.png" width="200">
					</button>	
				</div>
				<div class="col">
					<button  onclick ="playtest('2');"class="btn">
						<img src="cerJem.png" width="200">
					</button>	
				</div>
			</div>
			<div class="row offset-1">
				<div class="col">
					<button  onclick ="playtest('3');" class="btn">
						<img width="200" src="cerChin.png" >
					</button>
				</div>
				<div class="col">
					<button onclick ="playtest('4');" class="btn">
						<img src="cerSin.png"  width="200">
					</button>
				</div>
				<div class="col">
					<button onclick ="playtest('5');" class="btn">
						<img width="200" src="cerTaa.png">
					</button>	
				</div>	
			</div>
			<div class="row offset-6">
				<div class="col">
					<button onclick ="active();" class="btn btn-primary">
						<p> هيا لنبدأ اللعب</p>
					</button>
					
					
					
				</div>
			</div>
			<div class="row">
                <div class="col">
                    <img src="ico4.png" width="100">
                </div>
                <div class="col offset-4 text-end">
                    <a href="../Activite1B/tache1A1.php"><img  src="ico3.png" width="100"></a>
                </div>
			</div>
			<div class="row position-relative offset-4">
				<div class="col position-absolute top-100 start-50 translate-middle">
					<a href="../Accueil/Pageaccuiel.php"><img src="ico1.png" width="100"></a>
					<a href=""><img onclick ="affiche();" src="ico11.png" width="70"></a>
					<a href=""><img src="ico2.png" width="100"></a>
					<a href=""><img src="ico.png" width="140"></a>
				</div>
			</div>
		</div>	
	</div>
	
	
	<audio id="1"  src ="sad.mp3" ></audio>
	<audio id="2"  src ="jem.mp3" ></audio>
	<audio id="3"  src ="chin.mp3" ></audio>
	<audio id="4"  src ="sin.mp3" ></audio>
	<audio id="5"  src ="taa.mp3" ></audio>
	<audio id="6"  src ="felicitation.mp3" ></audio>
	<audio id="7"  src ="Faux.mp3" ></audio>
	
	<?php
		function php_func($value){
			echo "Stay Safe ";
			echo $value;
		}
	?>

	<script>
		var audio1 = document.getElementById("1");
		var audio2 = document.getElementById("2");
		var audio3 = document.getElementById("3");
		var audio4 = document.getElementById("4");
		var audio5 = document.getElementById("5");
		var audio6 = document.getElementById("6");
		var audio7 = document.getElementById("7");
		
		var comp = 0;	
		var point = 0;
		var score=0;
		var v=0;
		
		function clickMe(){
			record = point;
			var result = "<? php php_func('Yoh'); ?>";
			document.write(result);
			document.write(record);
			
		}
		
		
		function playAleatoire()
		{
			var ok;
			var indice = Math.floor(Math.random() * 5) + 1;
			//document.write(indice);
			
			if(indice==1)
			{
				audio1.play();
				
				audio2.pause();
				audio3.pause();
				audio4.pause();
				audio5.pause();
				audio6.pause();
				audio7.pause();
				
				ok="1";
			}
			else if (indice==2)
			{
				audio2.play();
				
				audio1.pause();
				audio3.pause();
				audio4.pause();
				audio5.pause();
				audio6.pause();
				audio7.pause();
				
				ok="2";
			}
			else if (indice==3)
			{
				audio3.play();
				
				audio2.pause();
				audio1.pause();
				audio4.pause();
				audio5.pause();
				audio6.pause();
				audio7.pause();
				
				ok="3";
			}
			else if (indice==4)
			{
				audio4.play();
				
				audio1.pause();
				audio2.pause();
				audio3.pause();
				audio5.pause();
				audio6.pause();
				audio7.pause();
				
				ok="4";
			}
			else if (indice==5)
			{
				audio5.play();
				
				
				audio1.pause();
				audio2.pause();
				audio3.pause();
				audio4.pause();
				audio6.pause();
				audio7.pause();
				
				ok="5";
			}
			//document.write(indice);
			return ok;
			
		}
		
		
			
		function active()
		{
			
			comp+=1;
			if(comp<6)
			{
				t = playAleatoire();
				console.log(point);
			} 
		}
		
		function playtest(i)
		{
			if(i==t)
			{
				
				point+=20;
				audio6.play();
				audio1.pause();
				audio2.pause();
				audio3.pause();
				audio4.pause();
				audio5.pause();
				audio7.pause();
				//document.write(point);
				var val = confirm("Tres bien !!");
				if(val==true)
					active();
				else
					active();
			}
			else
			{
				audio7.play();
				
				audio1.pause();
				audio2.pause();
				audio3.pause();
				audio4.pause();
				audio5.pause();
				audio6.pause();
				
				var val = confirm("humm Erreur !!");
				if(val==true)
					active();
				else
					active();
			}
				
		}
			
	</script>
	
	<br>
	
	<button onclick ="clickMe();">Check</button>
	
<?php
/*
	$tete="<script>document.write(recupere());</script>";
	
	
			echo $tete;
	
	
		
			$score = "<script>document.write(x);</script>";
			echo $score;
			
		
	
		require_once 'connection.php';
	 
		 $requete ="INSERT INTO tache VALUES('tacheA1', 'tacheA1', 'Activite1' , '27')";
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
		 */
	?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

