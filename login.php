<?php
	session_start();
	include('connection.php');
	if (isset($_POST["username"])) 
	{ 
		$user = $_POST["username"];
	} 
	if (isset($_POST["password"])) 
	{ 
		$password = $_POST["password"];
	}
	$sql = "SELECT password FROM userdata WHERE userName = '$user'";
	echo mysql_result($conn, $sql);
?>
