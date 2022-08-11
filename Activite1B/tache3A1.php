<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tache 3 Activite 1</title>
	<style type="text/css">
		.div1 {width:140px;height:180px;border:1px solid #aaaaaa;}
  </style>
	
	
</head>
<body>
 
	<audio id="audio1"  src ="4.mp3" ></audio>
	<audio id="audio2"  src ="5.mp3" ></audio>
	<div class="div"  style="background-image: url(t5.jpeg);">	
		<div  class="cont container">
			<div class="row offset-4">
				<div class="col">
					<img src="qst13.png" width="300">
				</div>	
			</div>
			<div class="row">
				<div class="col offset-3">
					<img src="serie4.png" alt="#" width="500">	
				</div>
			</div>
			<div class="row">
				<div class="col offset-3">
					<img src="serie3.png" alt="#" width="500">
				</div>
			</div>
			<div class="row offset-4">
				<div class="col">
					<button class="btn"><img onclick="verification1();" src="vrai.png" width="70"></button>
					<button class="btn"><img onclick="verification();" src="faux.png" width="70"></button>
					<button class="btn btn-primary">هيا لنبدأ اللعب</button>

				</div>
			</div>
			<div class="row">
					<div class="col">
						<a href="../Activite1A/tache3A1.php"><img src="ico4.png" width="100"></a>
					</div>
					<div class="col offset-4 text-end">
						<a href="../Accueil/Pageaccuiel.php"><img src="ico3.png" width="100"></a>
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

		<audio id="1"  src ="felicitation.mp3" ></audio>
		<audio id="2"  src ="Faux.mp3" ></audio>
	
		<script>
  
  
  //Audio 
		var audio1 = document.getElementById("1");
		var audio2 = document.getElementById("2");
				
	function verification()
	{
			audio1.play();		 
			audio2.pause();
	}

	function verification1()
	{
			audio1.pause();
			audio2.play();		 
		
	}
	
  </script>	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>