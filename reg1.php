
<?php
session_start();
header('location:mobilepuncher.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistartion');
$city = $_POST['city'];
$area = $_POST['area'];
$query = "select * from mobile where city='$city'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);


	$reg="insert into mobile(city , area) values ('$city','$area')";

	mysqli_query($con,$reg);
			


?>
