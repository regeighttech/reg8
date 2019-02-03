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
		  left:45%;
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

		#center{
			position:fixed;
		    max-width:25%;
		  	max-height:25%;
		  	top: 45%;
			left: 40%;
		}

		#topRight{
			position:fixed;
		    max-width:10%;
		  	max-height:10%;
		  	top: 0%;
			right: 0%;
		}

		#topLeft{
			position:fixed;
		    max-width:10%;
		  	max-height:10%;
		  	top: 0%;
			left: 0%;
		}

		html { 
		  background: url(city.mp4) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}


	</style>
</head>
<body>

	<video autoplay muted loop id="myVideo">
	  <source src="city.mp4" type="video/mp4">
	  Your browser does not support HTML5 video.
	</video>

	<!--<img src="img/siisu.png" alt="SiiSu Logo">-->
	<img id="center" src="img/siisu.png" alt="SiiSu Logo">

	<img id="topRight" src="img/SiiSUBlueBlack.png" alt="SiiSu Logo">

	<img id="topLeft" src="img/SiiSUBlueWhite.svg" alt="SiiSu Logo">

	<div class="content">
	  <!--<h1>Heading</h1>
	  <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei. Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.</p>
	  <button id="myBtn" onclick="myFunction()">Pause</button>-->
	  <button id="myBtn">Contact Us</button>
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
