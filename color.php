<body>
<center>
<!-- BUTTON FOR CHANGE COLOR -->
<button id= "color">Change Colour</button>
</center>
<script>
document.getElementById('color').onclick = changeColor;
<!-- CHANGE HERE -->
var currentColor = "red";
function changeColor() {
	if(currentColor == "red"){
	   document.body.style.color = "teal";
	   currentColor = "teal";
	} else {
	   document.body.style.color = "red";
           currentColor = "red";
	}
    }
</script>
</body>