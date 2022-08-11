<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Test Move Object</title>
<script type="text/javascript">
function leftArrowPressed() {
var element = document.getElementById("image1");
element.style.left = parseInt(element.style.left) - 5 + 'px';
}
function rightArrowPressed() {
var element = document.getElementById("image1");
element.style.left = parseInt(element.style.left) + 5 + 'px';
}
function upArrowPressed() {
var element = document.getElementById("image1");
element.style.top = parseInt(element.style.top) - 5 + 'px';
}
function downArrowPressed() {
var element = document.getElementById("image1");
element.style.top = parseInt(element.style.top) + 5 + 'px';
}
function moveSelection(event) {                    
switch (event.keyCode) {
case 37:
leftArrowPressed();
break;
case 39:
rightArrowPressed();
break;
case 38:
upArrowPressed();
break;
case 40:
downArrowPressed();
break;
}
};
function gameLoop()
{
//change position based on speed
moveSelection();
setTimeout("gameLoop()",10);
}
</script>
</head>
<body onload="gameLoop();" onkeydown="" onkeyup="moveSelection(event)" bgcolor='yellow'>
Test
<img id="image1" src="prof.png" style="position: absolute; left: 15; right: 15; top: 15; bottom: auto; " height="15" width="15">
</body>
end html
</html>