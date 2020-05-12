<?php
session_start();
?>
<html>
<title>
	Fuego-petrol
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
	<div class="sidenav">
  <a href="location.php">Location</a>
  <a href="petrol.php">Nearby petrol bank</a>
  <a href="mobilepuncher.php">Mobile punchers</a>
  <a href="workshop.php">Workshops</a>
</div>
<div class="main">
<h3>Petrol<h3>
<section>
	<form action="reg1.php" method="post">
	<input placeholder="Enter City" class="form-control" name="name"><br>
	<input placeholder="Enter area" class="form-control" name="name"><br>
	<button type="button" class="btn btn-primary">Search</button>
	</form>
</section>
</div>
<div class="footer">
<p>fuego@copyright2020<p>
</div>
</body>
</html>