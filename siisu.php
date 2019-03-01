<!DOCTYPE html>
<html lang="en">
<head>
	<title>SiiSU - A Regulatory Solution</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
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

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="reg8/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="reg8/node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="reg8/node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="reg8/css/styles.css">
	<style type="text/css">

		button:focus {outline:0 !important;}

		#myBtn {
		  width: 200px;
		  font-size: 18px;
		  padding: 10px;
		  border: none;
		  background: #000;
		  color: #fff;
		  cursor: pointer;

		  position: absolute;
		  left: 50%;
		  top: 50%;
		  transform: translate(-50%, -50%);
		}

		#myBtn:hover {
		  background: #ddd;
		  color: black;
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

		.wrap-contact100 {
			display: none;
		}

		/*Center Logo*/
		#center{
		    max-width:25%;
		  	max-height:25%;
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
		}

		#topLeft{
			position:fixed;
		    max-width:10%;
		  	max-height:10%;
		  	top: 0%;
			left: 0%;
		}

		body {
			background-color: black;
		}
	</style>
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">SiiSU</a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item Active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="reg8/about.html"><span class="fa fa-info ga-lg"></span> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>


	<div class="container-contact100">
		<!--
		<video autoplay muted loop class="contact100-map" id="google_map">
		  <source src="reg8/city.mp4" type="video/mp4">
		  Your browser does not support HTML5 video.
		</video>
		-->

		<!--<img src="img/siisu.png" alt="SiiSu Logo">-->
		<img id="center" src="reg8/img/SiiSUFinal.png" alt="SiiSu Logo">
		<!--<img id="topRight" src="img/SiiSUBlueBlack.png" alt="SiiSu Logo">-->
		<!--<img id="topLeft" src="reg8/img/SiiSUBlueWhite.svg" alt="SiiSu Logo">-->

		<div class="content">
			<div style="color: #fff;" id="myBtn">Contact Us</div>
			<span id="copyRightsBottomRight">Powered by SiiSU Technologies</span>
			<span id="copyRightsBottomLeft">© 2019 | SiiSU, Inc. <i>A Delaware Corporation.</i> All rights reserved.</span>
		</div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(reg8/ContactForm/images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Contact Us
				</span>
				<span style="font-weight: bold;" class="contact100-form-title-2">
						ENQUIRIES AND FEEDBACK
					</span>
					<span class="contact100-form-title-2">
						For all written feedback and general enquiries,
					</span>
					<span class="contact100-form-title-2">
						please get in touch:
					</span>
			</div>

			<form class="contact100-form validate-form" method="post" name="contact_form" action="reg8/contactFormHandler.php">
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
					<textarea class="input100" name="notes" placeholder="Your Comment..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn" style="width: unset;">
					<button class="contact100-form-btn" name="submit" type="submit">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
				<div class="container-contact100-form-btn" id="cancel_button" style="color:#ff4b5a; float:right; width: unset;">
					<button class="contact100-form-btn" style="background-color:#ff4b5a;">
							<span>
								Cancel
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
					</button>
				</div>
			</form>
		</div>
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
	<script src="reg8/ContactForm/js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="reg8/ContactForm/js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');


	  $(function() {
	  // contact form animations
	  $('#myBtn').click(function() {
	    $('.wrap-contact100').fadeToggle();
	  })
	  $(document).mouseup(function (e) {
	    var container = $(".wrap-contact100");

	    if (!container.is(e.target) // if the target of the click isn't the container...
	        && container.has(e.target).length === 0) // ... nor a descendant of the container
	    {
	        container.fadeOut();
	    }
	  });
	});

	  $(function() {
	  // contact form animations
	  $('#cancel_button').click(function() {
	    $('.wrap-contact100').fadeToggle();
	  })
	  $(document).mouseup(function (e) {
	    var cancel_button = $("#cancel_button");

	    if (cancel_button.is(e.target)) // if the target of the click isn't the container...
	    {
	        container.fadeOut();
	    }
	  });
	});
	</script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="reg8/node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="reg8/node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="reg8/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>