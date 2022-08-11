<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
	<style>
    </style>
	<title>Avatar</title>
</head>
<body>
	<div class="div" style="background-image: url(t8.jpg);">
        <div class="cont container">
        	<div class="row offset-3">
				<div class="col">
					<img src="qst23.png" width="500">
				</div>	
			</div>
			<div class="row offset-2">
				<div class="col">
					<div class="row">
						<div class="col">
						<button  onclick ="playtest('1');"class="btn">
							<img  width="200" src="dob.png">
						</button>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<button  onclick ="playtest('2');" class="btn">
								<img width="200" src="cat.png" >
							</button>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<button  onclick ="playtest('3');" class="btn">
								<img width="200" src="dodaa.png" >
							</button>
						</div>
					</div>

				</div>
				<div class="col">
					<img onclick="activer();" src="envol.png" alt="#" width="600">
					<div class="col offset-5">
					
				</div>
				</div>	
			</div>	
			<div class="row">
				<div class="col">
					<a href="tache2A2.php"><img src="ico4.png" width="100"></a>
				</div>
				<div class="col offset-4 text-end">
					<a href="tache4A2.php"><img src="ico3.png" width="100"></a>
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
	
	<audio id="1"  src ="TON.mp3" ></audio>
	
	<audio id="2"  src ="felicitation.mp3" ></audio>
	<audio id="3"  src ="Faux.mp3" ></audio>
	<script>
		var audio1 = document.getElementById("1");
		var audio2 = document.getElementById("2");
		var audio3 = document.getElementById("3");
		
		function activer()
		{
			audio1.play();
		}
		
		function playtest(i)
			{
				if(i==2)
				{
					
					audio1.pause();
					audio2.play();
					audio3.pause();
					
				}
				else
				{
					
					audio1.pause();
					audio2.pause();
					audio3.play();
				}
				//document.write(i);	
			}
	</script>
	
</body>
</html>