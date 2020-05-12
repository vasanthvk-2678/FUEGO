<?php
session_start();
require_once 'dbconfig.php';
$db = new dbcon();
$query="select * from city";
$results=$db->fetchdata($query);
?>
<html>
<title>
	sam
</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/3/w3.css">
	
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
<h3>Workshop<h3>
<section>
<div class="mob">
	<form action="" method="POST">
		<select id="city"name="city" class="form-control"onchange="cityvalue(this.value)">
				<option value="">Select city</option>
				<?php foreach($results as $city){
					?>
					<option value="<?php echo $city["city_id"];?>"><?php echo $city["city_name"];?></option>
				<?php	
				}
				?>
		</select><br>
		<select id="area" class="form-control"  name="area"  >
		        <option value="">Select area</option>
	
		</select><br>
		<input type="submit" class="btn btn-primary" name="search" value="search"><br><br>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
		<script>
		function cityvalue(val){
					$.ajax({
						type:"POST",
						url:"area1.php:
						data:"city_id="+val,
						success:function(data){
							$("#area").html(data);
							
						}
					}):
		}
		
		</script>
		
	</form>
</div>
</section>

<div class="footer">
<p>fuego@copyright2020<p>
</div>
</body>