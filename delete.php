<?php
	include('connect.php');

		$id=$_GET['id'];
		$sql = "DELETE FROM hostel WHERE id = $id";
		$conn->query($sql);
				

	header('location: display.php');
?>
