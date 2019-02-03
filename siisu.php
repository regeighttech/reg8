<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>

		@charset "UTF-8";

		.contact-panel-button {
		  background: #0a0a0a;
		  color: #fefefe;
		  width: auto;
		  padding: 0.25rem 1.25rem;
		  text-align: center;
		  position: absolute;
		  top: -30px;
		  right: 20px;
		  transition: background 0.25s ease-in-out;
		}

		.contact-panel-button:after {
		  content: "⥣";
		  margin-left: 5px;
		}

		.contact-panel-button:hover {
		  background: #242424;
		  color: #f0f0f0;
		}

		.is-active .contact-panel-button:after {
		  content: "⥥";
		}

		.contact-panel {
		  padding: 1rem;
		  z-index: 1;
		  background: #0a0a0a;
		  width: 350px;
		  height: 375px;
		  position: fixed;
		  bottom: -375px;
		  right: 20px;
		  transition: bottom 0.5s ease-in-out;
		}

		.contact-panel label {
		  color: #fefefe;
		  width: 100%;
		}

		.contact-panel input[type="text"],
		.contact-panel input[type="email"],
		.contact-panel textarea {
		  background: #303030;
		  border: #0a0a0a;
		  transition: background 0.3s ease-in-out;
		}

		.contact-panel input[type="text"]:focus,
		.contact-panel input[type="email"]:focus,
		.contact-panel textarea:focus {
		  background: #fefefe;
		}

		.contact-panel .contact-panel-actions {
		  display: -webkit-flex;
		  display: -ms-flexbox;
		  display: flex;
		  -webkit-justify-content: flex-end;
		      -ms-flex-pack: end;
		          justify-content: flex-end;
		  -webkit-align-items: center;
		      -ms-flex-align: center;
		          align-items: center;
		}

		.contact-panel .submit-button {
		  margin-bottom: 0;
		}

		.contact-panel .cancel-button {
		  margin-bottom: 0;
		  padding: 0.75rem 1rem;
		  color: #fefefe;
		  transition: background 0.25s ease-in-out;
		}

		.contact-panel .cancel-button:hover {
		  background: #242424;
		  color: #f0f0f0;
		}

		.contact-panel.is-active {
		  bottom: 0;
		}

		@media screen and (max-width: 39.9375em) {
		  .contact-panel {
		    width: 100%;
		    right: 0;
		  }
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

	<!-- Contact Us form-->
	<div class="contact-panel" id="contact-panel" data-toggler=".is-active">
	  <a class="contact-panel-button" data-toggle="contact-panel">Contact us</a>
	  <form action="">
	    <div class="row">
	      <label>Full name *
	        <input type="text" placeholder="Full name">
	      </label>
	    </div>
	    <div class="row">
	      <label>Email *
	        <input type="email" placeholder="Email address">
	      </label>
	    </div>
	    <div class="row">
	      <label>Message *
	        <textarea placeholder="Describe your needs" rows="3"></textarea>
	      </label>
	    </div>
	    <div class="contact-panel-actions">
	      <button class="cancel-button" data-toggle="contact-panel">Nevermind</button>
	      <input type="submit" class="button submit-button" value="Submit">
	    </div>
	  </form>
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

	// closes the panel on click outside
	$(document).mouseup(function (e) {
	  var container = $('#contact-panel');
	  if (!container.is(e.target) // if the target of the click isn't the container...
	  && container.has(e.target).length === 0) // ... nor a descendant of the container
	    {
	      container.removeClass('is-active');
	    }
	});


	</script>

</body>
</html>
