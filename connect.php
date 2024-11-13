<?php
$server="localhost";
$user="root";
$password="";
$database="cybersquad";

$conn = new mysqli($server, $user, $password, $database);

if($conn->connect_error)
{
    die("db not connected");
    
}
?>