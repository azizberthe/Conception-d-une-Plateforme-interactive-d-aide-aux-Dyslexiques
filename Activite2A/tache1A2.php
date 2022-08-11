<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
	<style>
     
    </style>
	
	<title>Avatar</title>
</head>
<body>
	<div class="div" style="background-image: url(t10.jpg);">
        <div class="cont container">
        	<div class="row offset-3">
				<div class="col">
					<img src="qst21.png" width="500">
				</div>	
			</div>
			<div class="row">
				<div class="col">
					<button  onclick ="playtest('1');"class="btn">
						<img width="200" src="s12.png">
					</button>
				</div>
				<div class="col offset-3">
					<button  onclick ="playtest('2');" class="btn">
						<img width="200" src="s11112.png" >
					</button>
				</div>
			</div>
			<div class="row">
				<div class="col offset-2">
					<button  onclick ="playtest('3');" class="btn">
						<img width="200" src="s112.png" >
					</button>
				</div>
				<div class="col offset-4">
					<button  onclick ="playtest('4');" class="btn">
						<img width="200" src="s1112.png" >
					</button>
				</div>
			</div>
			<div class="row offset-5">
				<div class="col">
					<button onclick ="active();" class="btn btn-primary">
						<p> هيا لنبدأ اللعب</p>
					</button>
				</div>
			</div>		
			<div class="row">
                <div class="col">
                    <a href="../Accueil/Pageaccuiel.php"><img src="ico4.png" width="100"></a>
                </div>
                <div class="col offset-4 text-end">
                    <a href="tache2A2.php"><img src="ico3.png" width="100"></a>
                </div>
			</div>
			<div class="row position-relative offset-4">
				<div class="col position-absolute top-100 start-50 translate-middle">
					<a href="../Accueil/Pageaccuiel.php"><img src="ico1.png" width="100"></a>
					<a href=""><img src="ico11.png" width="70"></a>
					<a href=""><img src="ico2.png" width="100"></a>
					<a href=""><img src="ico.png" width="140"></a>
				</div>
			</div>
        </div>
    </div>        
    
	
	
	<audio id="1"  src ="sou.mp3" ></audio>
	<audio id="2"  src ="son.mp3" ></audio>
	<audio id="3"  src ="sa.mp3" ></audio>
	<audio id="4"  src ="son.mp3" ></audio>
	
	<audio id="5"  src ="felicitation.mp3" ></audio>
	<audio id="6"  src ="Faux.mp3" ></audio>
	
	<script>
		var audio1 = document.getElementById("1");
		var audio2 = document.getElementById("2");
		var audio3 = document.getElementById("3");
		var audio4 = document.getElementById("4");
		
		var audio5 = document.getElementById("5");
		var audio6 = document.getElementById("6");
		
			
		
			function playAleatoire()
			{
				var ok;
				var indice = Math.floor(Math.random() * 4) + 1;
				//document.write(indice);
				
				if(indice==1)
				{
					audio1.play();
					
					audio2.pause();
					audio3.pause();
					audio4.pause();
					audio5.pause();
					audio6.pause();
					
					
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
					
					ok="4";
				}
				//document.write(indice);
				return ok;
				
			}
			
			function active()
			{
				t = playAleatoire();
			}
			//document.write(t);
		
			function playtest(i)
			{
				if(i==t)
				{
					audio5.play();
					
					audio1.pause();
					audio2.pause();
					audio3.pause();
					audio4.pause();
					audio6.pause();
					
					var val = confirm("Tres bien !!");
					if(val==true)
						active();
					else
						active();
					
				}
				else
				{
					audio6.play();
					
					audio1.pause();
					audio2.pause();
					audio3.pause();
					audio4.pause();
					audio5.pause();
					
					var val = confirm("humm Erreur !!");
					if(val==true)
						active();
					else
						active();
				}
				//document.write(i);	
			}
			
			
	
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php 
	
	function audio ()
	{
	
	}
	
?>