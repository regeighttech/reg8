<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

	<style>
		/* Style the video: 100% width and height to cover the entire window */
		#myVideo {
		  position: fixed;
		  right: 0;
		  bottom: 0;
		  min-width: 100%; 
		  min-height: 100%;
		}

		/* Add some content at the bottom of the video/page */
		.content {
		  position: fixed;
		  bottom: 0;
		  background: rgba(0, 0, 0, 0.5);
		  color: #f1f1f1;
		  width: 100%;
		  padding: 20px;
		}

		/* Style the button used to pause/play the video */
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
	</style>

</head>

	<!-- The video -->
	<video autoplay muted loop id="myVideo">
	  <source src="city.mp4" type="video/mp4">
	</video>

	<!-- Optional: some overlay text to describe the video -->
	<div class="content">
	  <h1>Heading</h1>
	  <p>Lorem ipsum...</p>
	  <!-- Use a button to pause/play the video with JavaScript -->
	  <button id="myBtn" onclick="myFunction()">Pause</button>
	</div>

<body>
  <script src="js/scripts.js"></script>
  <script>
		// Get the video
		var video = document.getElementById("myVideo");

		// Get the button
		var btn = document.getElementById("myBtn");

		// Pause and play the video, and change the button text
		function myFunction() {
		  if (video.paused) {
		    video.play();
		    btn.innerHTML = "Pause";
		  } else {
		    video.pause();
		    btn.innerHTML = "Play";
		  }
		}
		</script>
</body>
</html>
