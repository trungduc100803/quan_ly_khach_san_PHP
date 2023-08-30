<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "quan_ly_khach_san";

// Create connection
$conn = new mysqli($servername, $username, $password, $databaseName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
