<?php
	session_start();
	extract($_POST);
	$servername = "localhost";
	$uname = "sejalgup_root";
	$pword = "Sg8790564663";
	// Create connection
	$conn = new mysqli($servername, $uname, $pword, "sejalgup_marketplace");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT username,name FROM user where username ='".$userName."' and password = '".$upassword."'";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		$row = $result->fetch_array(MYSQLI_ASSOC);
		$fp = fopen('loggedInUsers.txt', 'r');
		$file = file_get_contents("loggedInUsers.txt",true);
		if($file!=""){
			$array = unserialize($file);
			$array[$row['username']] = "loggedIn";
		}else{
			$array = array(
				$row['username'] => "LoggedIn",
			);
		}
		fclose($fp);
		$fp2 = fopen('loggedInUsers.txt', 'w');
		$string_data = serialize($array);
		file_put_contents("loggedInUsers.txt", $string_data);
		fclose($fp2);
		$_SESSION['login_user'] = $row['username'];
		$_SESSION['login_user_name'] = $row['name'];
		header("Location: /marketplace/index.php?LoginStatus=Login Successful");
	}else{
		header("Location: /marketplace/index.php?LoginStatus=Login Unsuccessful.Invalid Credentials");
		exit();
	}
?>