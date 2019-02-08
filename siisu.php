<!DOCTYPE html>
<html>
<head>
	<title>SiiSU - A Regulatory Solution</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">

	<!--FOR CONTACT FORM-->
	<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="reg8/ContactForm/images/icons/favicon.ico"/>
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="reg8/ContactForm/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="reg8/ContactForm/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="reg8/ContactForm/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="reg8/ContactForm/vendor/animate/animate.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="reg8/ContactForm/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="reg8/ContactForm/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="reg8/ContactForm/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="reg8/ContactForm/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="reg8/ContactForm/css/util.css">
		<link rel="stylesheet" type="text/css" href="reg8/ContactForm/css/main.css">
	<!--===============================================================================================-->

	<style>
		@import "https://fonts.googleapis.com/css?family=Raleway";
		* { box-sizing: border-box; }
		body { 
		  margin: 0; 
		  padding: 0; 
		  background: #333;
		  font-family: Raleway; 
		  /*text-transform: uppercase; */
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

		#contactForm{
			position: fixed;
		 	top:50%;
		 	left:50%;
		 	-webkit-transform: translate(-50%,-50%)
		}
		/*#contactForm { 
		  display: none;
		  border: 6px solid #303030; 
		  padding: 2em;
		  width: 400px;
		  text-align: center;
		  background: white;
		  position: fixed;
		  top:50%;
		  left:50%;
		  transform: translate(-50%,-50%);
		  -webkit-transform: translate(-50%,-50%)
		}

		#contactForm input[type="text"],
		#contactForm input[type="email"]{
		  background: #303030;
		  border: #0a0a0a;
		  transition: background 0.3s ease-in-out;
		}

		#contactForm input[type="text"]:focus,
		#contactForm input[type="email"]:focus,
		#contactForm textarea:focus {
		  background: #fefefe;
		}

		input, textarea { 
		  margin: .8em auto;
		  font-family: inherit; 
		  text-transform: inherit; 
		  font-size: inherit;
		  
		  display: block; 
		  width: 280px; 
		  padding: .4em;
		  background: #303030;
    	  border: none;
		}
		textarea { height: 80px; resize: none; }

		.formBtn { 
		  width: 140px;
		  display: inline-block;
		  
		  background: #303030;
		  color: #fff;
		  font-weight: 100;
		  font-size: 1.2em;
		  border: none;
		  height: 30px;
		  vertical-align: middle;
		  text-align: center;
		  padding: 0px;
		}*/


		//OLD CSS STARTS HERE

		* {
		  box-sizing: border-box;
		}

		body {
		  margin: 0;
		  font-family: Courier;
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

		#contactUsImage{
			max-width: 100%;
    		max-height: 100%;
		}

		.content {
		  position: fixed;
		  bottom: 0;
		  background: rgba(0, 0, 0, 0.5);
		  color: #black;
		  width: 100%;
		  padding: 30px;
		  text-align: center;
		}

		#myBtn {
		  width: 200px;
		  font-size: 18px;
		  padding: 10px;
		  border: none;
		  background: #000;
		  color: #fff;
		  cursor: pointer;
		  right: 43%;
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
		  	top: 35%;
			left: 37%;
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

		/*#contactUsForm{
			background: black;
			margin: 10px;
    		padding: 1px;

		}*/


	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

	<video autoplay muted loop id="myVideo">
	  <source src="reg8/city.mp4" type="video/mp4">
	  Your browser does not support HTML5 video.
	</video>

	<!--<img src="img/siisu.png" alt="SiiSu Logo">-->
	<img id="center" src="reg8/img/SiiSUFinal.png" alt="SiiSu Logo">

	<!--<img id="topRight" src="img/SiiSUBlueBlack.png" alt="SiiSu Logo">-->

	<img id="topLeft" src="reg8/img/SiiSUBlueWhite.svg" alt="SiiSu Logo">

	<!--<div class="content">
	  <h1>Heading</h1>
	  <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei. Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.</p>
	  <button id="myBtn" onclick="myFunction()">Pause</button>
	  <button id="myBtn">Contact Us</button>
	</div>-->

	<div class="content">
		<!-- Contact Us form-->
		<div id="myBtn">Contact Us</div>

		<div id="contactForm">
			<div class="wrap-contact100">
				<div class="contact100-form-title" style="background-image: url(reg8/ContactForm/images/bg-01.jpg);">
					<span class="contact100-form-title-1">
						Contact Us
					</span>

					<span class="contact100-form-title-2">
						Feel free to drop us a line below!
					</span>
				</div>

				<form class="contact100-form validate-form">
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full Name:</span>
						<input class="input100" type="text" name="name" placeholder="Enter full name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email:</span>
						<input class="input100" type="text" name="email" placeholder="Enter email addess">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Phone is required">
						<span class="label-input100">Phone:</span>
						<input class="input100" type="text" name="phone" placeholder="Enter phone number">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Message is required">
						<span class="label-input100">Message:</span>
						<textarea class="input100" name="message" placeholder="Your Comment..."></textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</form>
			</div>
		</div>
		<!--
		<div id="contactForm">
		  <img id="contactUsImage" src="reg8/img/contactUs.png" alt="Contact Us image">
		  <p>ENQUIRIES AND FEEDBACK</p>
		  <p>For all written feedback and general enquiries, please get in touch:</p>
		  
		  <form id="contactUsForm" method="post" name="contact_form" action="reg8/contactFormHandler.php">
		    <input placeholder="Name" name="name" type="text" required />
		    <input placeholder="Email" name="email" type="email" required />
		    <input placeholder="Mobile" name="mobile" type="text" required />
		    <textarea placeholder="Notes" name="notes" required></textarea>
		    <input name="submit" class="formBtn" type="submit" />
		    <input class="formBtn" type="reset" />
		  </form>
		</div>
		-->

	</div>

	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
		<script src="reg8/ContactForm/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
		<script src="reg8/ContactForm/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
		<script src="reg8/ContactForm/vendor/bootstrap/js/popper.js"></script>
		<script src="reg8/ContactForm/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
		<script src="reg8/ContactForm/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
		<script src="reg8/ContactForm/vendor/daterangepicker/moment.min.js"></script>
		<script src="reg8/ContactForm/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
		<script src="reg8/ContactForm/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
		<script src="js/map-custom.js"></script>
	<!--===============================================================================================-->
		<script src="reg8/ContactForm/js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-23581568-13');
		</script>

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
