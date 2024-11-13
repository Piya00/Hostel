<?php
require("connect.php");

$id = $_POST["id"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$hid	=$_POST["hid"];
$room	=$_POST["room"];
$email	=$_POST["email"];
$mobile	=$_POST["mobile"];

$sql = "INSERT INTO hostel (id, fname, lname,hid,room,email,mobile) VALUES ('$id', '$fname', '$lname','$hid','$room',
'$email','$mobile')";

if ($conn->query($sql) === TRUE) {
    header('location: home.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
