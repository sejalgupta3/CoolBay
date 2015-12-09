<?php
	session_start();
	extract($_GET);
	$servername = "localhost";
	$username = "<username>";
	$password = "<password>";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, "sejalgup_marketplace");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	//Create query
	$sql = "INSERT INTO history values('".$_SESSION['login_user']."','".$url."')";
	if ($conn->query($sql) === TRUE) {
		if($host=="sg"){
			$domainUrl = "http://www.sejalgupta.com/school/views/setCrossDomainSession.php";
		}else if($host=="blackBlue"){
			$domainUrl = "http://www.blackblues.org/login-redirect.php";
		}else if($host=="gadget"){
			$domainUrl = "http://shagunjuneja.com/electronics/sessionauthenticate.php";
		}
		if($host=="tadka"){
			$domainUrl = "http://aishwaryapatwardhan.com/session_set.php";
		}else if($host=="stack"){
			$domainUrl = "http://www.blackblues.org/login-redirect.php";
		}else if($host=="doll"){
			$domainUrl = "http://shagunjuneja.com/electronics/sessionauthenticate.php";
		}
		header("Location: ".$domainUrl."?redirectUrl=".$url."&username=".$_SESSION['login_user']."&name=".$_SESSION['login_user_name']);
	}
	$conn->close();
?>