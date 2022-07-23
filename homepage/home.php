<!DOCTYPE html>
<html>
	
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Student Information System</title>
		<link rel="stylesheet" href="home.css" type="text/css">
		<script src="responsiveslides.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	</head>
	<body style="background-color:#dff2f5">
	
	<div id="header">
		<h2><image src="img/img3.jfif" style="width:10%; border-radius:20%;"></br>
		CCN UNIVERSITY OF SCIENCE & TECHNOLOGY<br>
		<h3>Chowdhery Estate, Kotbari, Cumilla</h3></h2>
		<marquee style="background-color:black; color:white; font-size:20px;">Welcome to CCN University Of Science & Technology| সিসিএন বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ে স্বাগতম |</marquee>
		<ul id="menu">
			<li><a href="">Home</a></li>
			<li><a href="http://localhost/information-system/allstudent.php">All Student Information</a></li>
			<li><a href="">Facalty</a>
			<ul>
				<li><a href="#">CSE</a></li>
				<li><a href="#">Civil</a></li>
				<li><a href="#">EEE</a></li>
				<li><a href="#">BBA</a></li>
				<li><a href="#">Mathematics</a></li>
				<li><a href="#">Bangla</a></li>
				<li><a href="#">Economics</a></li>
			</ul>
			</li>
				<li><a href="../login.php">Login</a></li>
				<li><a href="../register.php">Sign up</a></li>
		</ul>
	</div>
	<div class="wrapper">
		<ul class="rslides" id="slider1">
			<li><img src="img/img9.jpg" alt=""></li>
			<li><img src="img/img7.jpg" alt=""></li>
			<li><img src="img/img10.jpg" alt=""></li>
		</ul>
	</div>
	<div id="footer">
			All Right Reserved | Copy&copyRight 2020 | Courtesy Of ARIFUR RAHMAN
	</div>
<script>
		$(function() {
		$(".rslides").responsiveSlides();
		});
</script>
</body>
</html>