<?php

require("connect.php");

$id= $_POST["id"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$hid = $_POST["hid"];
$room = $_POST["room"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];

	$sql = "UPDATE hostel SET id='$id',fname='$fname',lname='$lname',hid='$hid',room='$room',email='$email',mobile='$mobile' 
	WHERE id=$id";
	if($conn->query($sql)==TRUE){
		echo "updated";
	}

header('location: display.php');
?>