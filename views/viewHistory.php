<?php 
session_start();
$servername = "localhost";
$username = "<username>";
$password = "<password>";
// Create connection
$conn = new mysqli($servername, $username, $password, "sejalgup_marketplace");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM history where username='".$_SESSION['login_user']."'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
//output data of each row
	while($row = $result->fetch_assoc()) {
		echo "<div> <a href=".$row['link'].">" . $row['link'] . "</a></div>";			
	}
}
$conn->close();
?>