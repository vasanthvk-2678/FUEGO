<?php
session_start();
?>
<html>
<title>
	Fuego-user
</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/3/w3.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<header>
	<ul id="head">
		<h2>
		<div>
		<h1>Welcome
		<?php
			echo $_SESSION['username']; 
		?> </h1>
	</div></h2>
	</ul>
	<nav class="w3-bar w3-black">
		<a href="home.php" class="w3-button w3-bar-item">Home</a>
		<a href="about.php" class="w3-button w3-bar-item">About</a>
		<a href="contact.php" class="w3-button w3-bar-item">Contact</a>
		<a href="help.php" class="w3-button w3-bar-item">Help</a>
	</nav>
</header>
<body>
<body>
	<div class="sidenav">
  <a href="location.php">Location</a>
  <a href="petrol.php">Nearby petrol bank</a>
  <a href="mobilepuncher.php">Mobile punchers</a>
  <a href="workshop.php">Workshops</a>
</div>

<!-- Page content -->
<div class="main">
 <p class="w3-opacity">
<h4>We have created a FUEGO website to help the drivers who are in need of fuel during driving and also the  details of the mobile punchers,and it also shows the information about the 
delivery of the petrol and also the live locations of the nearby petrolbunks..</h4></p>
</div>
	
</body>
</html>