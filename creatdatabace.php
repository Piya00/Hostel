<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "CyberSquad";  // Change the database name

$conn = new mysqli($server, $user, $password);

if ($conn->connect_error) {
    die("db not connected");
} else {
    $sql = "CREATE DATABASE IF NOT EXISTS CyberSquad";  // Change the database name
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
}

$conn->close();
?>
