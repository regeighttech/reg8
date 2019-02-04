<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<style>
		@import "https://fonts.googleapis.com/css?family=Raleway";
		* { box-sizing: border-box; }
		body { 
		  margin: 0; 
		  padding: 0; 
		  background: #333;
		  font-family: Raleway; 
		  text-transform: uppercase; 
		  font-size: 11px; 
		}
		h1{ margin: 0; }
		#contact { 
		  -webkit-user-select: none; /* Chrome/Safari */        
		  -moz-user-select: none; /* Firefox */
		  -ms-user-select: none; /* IE10+ */
		  margin: 4em auto;
		  width: 100px; 
		  height: 30px; 
		  line-height: 30px;
		  background: teal;
		  color: white;
		  font-weight: 700;
		  text-align: center;
		  cursor: pointer;
		  border: 1px solid white;
		}

		#contact:hover { background: #666; }
		#contact:active { background: #444; }

		#contactForm { 
		  display: none;

		  border: 6px solid salmon; 
		  padding: 2em;
		  width: 400px;
		  text-align: center;
		  background: #fff;
		  position: fixed;
		  top:50%;
		  left:50%;
		  transform: translate(-50%,-50%);
		  -webkit-transform: translate(-50%,-50%)
		  
		}

		input, textarea { 
		  margin: .8em auto;
		  font-family: inherit; 
		  text-transform: inherit; 
		  font-size: inherit;
		  
		  display: block; 
		  width: 280px; 
		  padding: .4em;
		}
		textarea { height: 80px; resize: none; }

		.formBtn { 
		  width: 140px;
		  display: inline-block;
		  
		  background: teal;
		  color: #fff;
		  font-weight: 100;
		  font-size: 1.2em;
		  border: none;
		  height: 30px;
		}


		//OLD CSS STARTS HERE

		* {
		  box-sizing: border-box;
		}

		body {
		  margin: 0;
		  font-family: Arial;
		  font-size: 17px;
		}

		#myVideo {
		  position: relative;
		  right: 0;
		  bottom: 0;
		  max-width: 100%; 
		  max-height: 100%;
		  min-width: 100%;
		  min-height: 100%;
		}

		.content {
		  position: fixed;
		  bottom: 0;
		  background: rgba(0, 0, 0, 0.5);
		  color: #f1f1f1;
		  width: 100%;
		  padding: 30px;
		}

		#myBtn {
		  width: 200px;
		  font-size: 18px;
		  padding: 10px;
		  border: none;
		  background: #000;
		  color: #fff;
		  cursor: pointer;
		  right: 41%;
		  bottom: 20%;
		  position: absolute;
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
			left: 39.5%;
		}

		/*
		#topRight{
			position:fixed;
		    max-width:10%;
		  	max-height:10%;
		  	top: 0%;
			right: 0%;
		}
		*/

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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

	<video autoplay muted loop id="myVideo">
	  <source src="city.mp4" type="video/mp4">
	  Your browser does not support HTML5 video.
	</video>

	<!--<img src="img/siisu.png" alt="SiiSu Logo">-->
	<img id="center" src="img/SiiSUBlueWhite.svg" alt="SiiSu Logo">

	<!--<img id="topRight" src="img/SiiSUBlueBlack.png" alt="SiiSu Logo">-->

	<img id="topLeft" src="img/SiiSUBlueWhite.svg" alt="SiiSu Logo">

	<!--<div class="content">
	  <h1>Heading</h1>
	  <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei. Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.</p>
	  <button id="myBtn" onclick="myFunction()">Pause</button>
	  <button id="myBtn">Contact Us</button>
	</div>-->

	<div class="content">
		<!-- Contact Us form-->
		<div id="myBtn">Contact US</div>

		<div id="contactForm">

		  <h1>Keep in touch!</h1>
		  <small>I'll get back to you as quickly as possible</small>
		  
		  <form action="#">
		    <input placeholder="Name" type="text" required />
		    <input placeholder="Email" type="email" required />
		    <input placeholder="Subject" type="text" required />
		    <textarea placeholder="Comment"></textarea>
		    <input class="formBtn" type="submit" />
		    <input class="formBtn" type="reset" />
		  </form>
		</div>

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

	$(function() {
	  
	  // contact form animations
	  $('#myBtn').click(function() {
	    $('#contactForm').fadeToggle();
	  })
	  $(document).mouseup(function (e) {
	    var container = $("#contactForm");

	    if (!container.is(e.target) // if the target of the click isn't the container...
	        && container.has(e.target).length === 0) // ... nor a descendant of the container
	    {
	        container.fadeOut();
	    }
	  });
	  
	});


	</script>

</body>
</html>
