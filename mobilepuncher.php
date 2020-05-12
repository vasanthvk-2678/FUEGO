<?php
session_start();
?>
<html>
<title>
	Fuego-mobilepuncher
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

<style>
table,th,td{
	border:1px solid black;
	width:1100px;
	background-color:lightblue;
}
</style>

<body>
	<div class="sidenav">
		<a href="location.php">Location</a>
		<a href="petrol.php">Nearby petrol bank</a>
		<a href="mobilepuncher.php">Mobile punchers</a>
		<a href="workshop.php">Workshops</a>
	</div>
	
	<section>
		<div class="main">
			<h3>Mobile Puncher<h3>
		<form action="" method="POST">
			<input placeholder="Enter City" class="form-control" name="city"><br>
			<input placeholder="Enter area" class="form-control" name="Area"><br>
			<table>
			<tr>
				<th>Name </th>
				<th>Phone no </th>
				<th>City </th>
				<th>Area </th>
				<th>Available </th>
			</tr>
			<input type="submit" class="btn btn-primary" name="search" value="search"><br><br>
		</form>
	
<?php
$con = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,'userregistartion');

 if(isset($_POST['search']))
 {
	 $city = $_POST['city'];
	 $Area = $_POST['Area'];
	 $query = "select * from mobile where city='$city' and Area='$Area' ";
	 $query_run = mysqli_query($con,$query);
	  while($row = mysqli_fetch_array($query_run))
	  {
		?>
		<tr>
		<td><?php echo $row['Name'] ?> </td>
		<td><?php echo $row['Mobile'] ?> </td>
		<td><?php echo $row['city'] ?> </td>
		<td><?php echo $row['Area'] ?> </td>
		<td><?php echo $row['Aavailability'] ?> </td>

		</tr>
		<?php
	  }
 }
?>

		</div>
	</section>

	<div class="footer">
		<p>fuego@copyright2020<p>
	</div>
</body>
</html>