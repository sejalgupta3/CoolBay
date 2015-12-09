<?php
	session_start();
	$fp = fopen('loggedInUsers.txt', 'r');
	$file = file_get_contents("loggedInUsers.txt",true);
	if($file!=""){
		$array = unserialize($file);
		foreach($array as $key => $value) {
			if ($key == $_SESSION['login_user'] AND $value == "loggedIn") {
				unset($array[$key]);
			}
		}
	}
	fclose($fp);
	$fp2 = fopen('loggedInUsers.txt', 'w');
	$string_data = serialize($array);
	file_put_contents("loggedInUsers.txt", $string_data);
	fclose($fp2);
	if(isset($_SESSION['login_user']))
		unset($_SESSION['login_user']);
	if(isset($_SESSION['login_user_name']))
		unset($_SESSION['login_user_name']);
	header("Location: /marketplace/index.php");
?>