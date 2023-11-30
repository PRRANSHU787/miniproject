<?php
	$userName = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
