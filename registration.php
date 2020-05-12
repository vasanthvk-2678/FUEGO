
<?php
session_start();
header('location:main.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'thanga');
$name = $_POST['name'];
$password = $_POST['password'];
$query = "select * from usertable where name='$name'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);
if($num == 1)
{
	echo"username already taken";
}
else
{

	$reg="insert into usertable(name , password) values ('$name','$password')";
echo "Registration successfull";
	mysqli_query($con,$reg);
			

}
?>
