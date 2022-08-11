<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tache 2</title>
</head>
<body>

	<audio id="1"  src ="tairon.mp3" ></audio>
	
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

  function allowDrop(ev)
  {
  ev.preventDefault();	
  }
   
  function drag(ev)
  {
  ev.dataTransfer.setData("Text",ev.target.id);
  
  }
   var j=0;
  
  function drop(ev,id)
  {
  ev.preventDefault();
  var data=ev.dataTransfer.getData("Text");
  ev.target.appendChild(document.getElementById(data));
  //document.write(id)
  
  try
	{
	  if(data=='img2' && id=='3')
		j++;
	  else if (data=='img3' && id=='2')
		  j++;
	  else if (data=='img1' && id=='1')
		  j++;
	 //console.log(j);
	} 
	catch (error)
	{
  console.error(error);
  // expected output: ReferenceError: nonExistentFunction is not defined
  // Note - error messages will vary depending on browser
	}
 
  }
  
function playtest()
	{
		if(j==3)
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
	function playtest1()
	{
		if(j!=3)
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

    <div class="div" style="background-image: url(t.jpg);">
        <div class="cont container">
            <div class="row offset-3">
				<div class="col">
					<img src="qst24.png" width="500">
				</div>	
			</div>
            <div class="row offset-4">
				<div class="col">
					<img onclick="activer();" src="envol.png" width="300">
				</div>
			</div>
            <div class="droppable-elements row">
                <div id="1" class="droppable col col-2" ondrop="drop(event,this.id)" ondragover="allowDrop(event)" ></div>
				<div id="2" class="droppable col col-2" ondrop="drop(event,this.id)" ondragover="allowDrop(event)" ></div>
                <div id="3" class="droppable col col-2" ondrop="drop(event,this.id)" ondragover="allowDrop(event)" > </div>
            </div>
            <div class="draggable-elements row">
                <div class="col draggable" style="color: #ff6384;" >
                    <img id="img1" draggable="true" ondragstart="drag(event)" src="rooo.png" width="200">
                </div>  
                <div class="col draggable" style="color: #36a2eb;" >
                    <img id="img2" draggable="true" ondragstart="drag(event)" src="ttaaa.png" width="200">
                </div>
                <div class="col draggable" style="color: #ffce56;">
                    <img id="img3" draggable="true" ondragstart="drag(event)" src="iii.png" width="200">
                </div>
				
				<div class="row offset-9">
				<div class="col">
					<button onclick="playtest();"  class="btn"><img src="vrai.png" width="70"></button>
					<button onclick="playtest1();"  class="btn"><img src="faux.png" width="70"></button>
				</div>
               
            </div>
            <div class="row">
                <div class="col">
                   <a href="tache3A2.php"> <img src="ico4.png" width="100"></a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>