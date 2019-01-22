<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	* {
	  box-sizing: border-box;
	}

	body {
	  margin: 0;
	  font-family: Arial;
	  font-size: 17px;
	}

	#myVideo {
	  position: fixed;
	  right: 0;
	  bottom: 0;
	  min-width: 100%; 
	  min-height: 100%;
	}

	.content {
	  position: fixed;
	  bottom: 0;
	  background: rgba(0, 0, 0, 0.5);
	  color: #f1f1f1;
	  width: 100%;
	  padding: 20px;
	}

	#myBtn {
	  width: 200px;
	  font-size: 18px;
	  padding: 10px;
	  border: none;
	  background: #000;
	  color: #fff;
	  cursor: pointer;
	}

	#myBtn:hover {
	  background: #ddd;
	  color: black;
	}
	img{
		position:absolute;
		left:0;
		top:0;
    max-width:10%;
  	max-height:10%;
	}


</style>
</head>
<body>

<video autoplay muted loop id="myVideo">
  <source src="city.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<img src="img/siisu.png" alt="SiiSu Logo">

<div class="content">
  <!--<h1>Heading</h1>
  <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei. Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.</p>
  <button id="myBtn" onclick="myFunction()">Pause</button>-->
  <center><button id="myBtn">Contact Us</button></center>
</div>

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    //btn.innerHTML = "Pause";
  } else {
    video.pause();
    //btn.innerHTML = "Play";
  }
}
</script>

</body>
</html>
