<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "online_medicine_donation";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$medicine_name = $_POST['medicine_name'];
$expiry_date = $_POST['expiry_date'];
$donor_name = $_POST['donor_name'];
$phone_number = $_POST['phone_number'];
$address =$_POST['address'];

$sql = "INSERT INTO donation (medicine_name, expiry_date, donor_name, phone_number, address) 
        VALUES ('$medicine_name', '$expiry_date', '$donor_name', '$phone_number', '$address')";

$conn->query($sql);

if ($stmt->execute()) {
    header("Location: thank_you.html"); 
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>




