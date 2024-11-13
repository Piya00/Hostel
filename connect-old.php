<?php
$server="localhost";
$user="neondb_owner";
$password="0qiS2YQWOpme";
$database="cybersquad";

$conn = new mysqli($server, $user, $password, $database);
// postgresql://neondb_owner:0qiS2YQWOpme@ep-dark-sound-a5trmxmi.us-east-2.aws.neon.tech/neondb?sslmode=require

if($conn->connect_error)
{
    die("db not connected");
    
}
?>