<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "datasci";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>