<?php
	extract($_POST);
	$servername = "localhost";
	$username = "<username>";
	$password = "<password>";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, "sejalgup_marketplace");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	// Create query
	$sql = "INSERT INTO user(name, username, password)
	VALUES ('".$name."', '".$uname."', '".$pword."')";
	
	if ($conn->query($sql) === TRUE) {
		header("Location: /marketplace/index.php?RegisterStatus=Registration successful");
	} else {
		header("Location: /marketplace/index.php?RegisterStatus= Registration unsuccessful");
	}
	$conn->close();
?>