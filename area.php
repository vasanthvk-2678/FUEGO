<?php
$con=new mysqli("localhost","root","","userregistartion");
$sql="select * from area where city_id={$_POST["id"]}";
$res=$con->query($sql);
echo "<option value="">select</option>";
while($row=$res->fetch_assos())
{
	echo "<option value='{$row["area_id"]}'>{$row["area"]}</option>";
}

?>