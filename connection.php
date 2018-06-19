<?php
$servername = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($servername,$username,$password,'grasshoppers');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
/*
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} */
echo "Connected successfully";
?>