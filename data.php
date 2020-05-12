<?php 
	require 'DbConnect.php';

	if(isset($_POST['aid'])) {
		$db = new DbConnect;
		$conn = $db->connect();

		$stmt = $conn->prepare("SELECT * FROM area WHERE area_id = " . $_POST['aid']);
		$stmt->execute();
		$area = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($area);
	}

	function loadcity() {
		$db = new DbConnect;
		$conn = $db->connect();

		$stmt = $conn->prepare("SELECT * FROM city");
		$stmt->execute();
		$city = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $city;
	}

 ?>