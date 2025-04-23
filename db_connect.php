<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "online_medicine_donation";
$port = 3307; 

$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
online_medicine_donation
