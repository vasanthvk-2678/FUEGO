<?php

?>
<html>
<title>
	Fuego-Login
</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/3/w3.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<header>
	<ul id="head">
		<h2>FUEGO</h2>
	</ul>
	<nav class="w3-bar w3-black">
		<a href="home.php" class="w3-button w3-bar-item">Home</a>
		<a href="about.php" class="w3-button w3-bar-item">About</a>
		<a href="contact.php" class="w3-button w3-bar-item">Contact</a>
		<a href="help.php" class="w3-button w3-bar-item">Help</a>
	</nav>
</header>
<body>
	<section class="w3-container w3-center" style="max-width:100%">

	<h2 class="w3-wide">FUEGO</h2>
	<p class="w3-opacity"><i>WE SERVE PETROL</i></p>
	<p class="w3-opacity">
<h4>We have created a FUEGO website to help the drivers who are in need of fuel during driving and also the  details of the mobile punchers ,and it also shows the information about the 
delivery of the petrol and also the live locations of the nearby petrolbunks..</h4></p>
	</section>
	<section class="w3-bar ">
		<h2>Login/Register<h2>
	</section>
	<section>
		<div class="container">
			<div class="login-box">
				<div class="row">
					<div class="col-md-6 login-left">
						<h2>Login here</h2>
						<form action="validation.php" method="post">
							<div class="form-group">
								<input type="text" placeholder="username" class="form-control" name="name" required>
							</div>
							<div class="form-group">
								<input type="password" placeholder="password" class="form-control" name="password" required>
							</div>
							<label>
									<input type="checkbox" checked="checked" name="remember"> Remember me
							</label>
							<div class="form-group">
								<input type="submit" value="login" class="btn btn-primary">
							</div>
							
							<div class="vs" class="btn btn-primary">
								<button type="button" class="cancelbtn">Cancel</button>
								<span >Forgot <a href="#forget.php">password?</a></span>
							</div>
								
						</form>
					</div>
					<div class="col-md-6 login-right">
						<h2>Register here</h2>
						<form action="registration.php" method="post">
							<div class="form-group">
								<input type="text" placeholder="username" class="form-control" name="name" required>
							</div>
							<div class="form-group">
								<input type="password" placeholder="password" class="form-control" name="password" required>
							</div>
							<div class="form-group">
								<input type="submit" value="Register" class="btn btn-primary">
							</div>
							<div class="vs" class="btn btn-primary">
								<button type="button" class="cancelbtn">Cancel</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>	 
<div class="footer">
<p>fuego@copyright2020<p>
</div>
</body>
</html>
