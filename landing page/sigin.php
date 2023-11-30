<?php
	$userName = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','data');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	 } 
	else {
		$stmt = $conn->prepare("insert into dataform(username, email, password, number) values('$username','$email','$password'.'number')");
		
		
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
