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
<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(11.004556,76.961632),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=&callback=myMap"></script>

</div>
<div class="footer">
<p>fuego@copyright2020<p>
</div>
</body>
</html>