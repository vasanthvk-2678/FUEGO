<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistartion');
$name = $_POST['name'];
$pass = $_POST['password'];
$query = "select * from usertable where name='$name' and password='$pass'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);
if($num == 1)
{
	$_SESSION['username']= $name;
header('location:user.php');	
}
else
{
	echo "Enter a valid id";
	header('location:main.php');
}
?>
