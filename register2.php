<?php
	session_start();
?>
<html>
	<head>
		<?php
			include('connection.php');
			include('header.php');
		?>
	</head>
	<body>
	<?php
	if (isset($_POST["login"])) 
	{ 
		$user = $_POST["login"];
	} 
	if (isset($_POST["password"])) 
	{ 
		$password = $_POST["password"];
	} 
	if (isset($_POST["confirmed"])) 
	{ 
		$confirmed = $_POST["confirmed"];
	} 
	if($confirmed != $password){
		echo "Passwords do not match";
		echo "<br>";
		echo "<a href='register.php'>Try again</a>";
		exit;
	}
	if (isset($_POST["games"])) 
	{  
		$games = $_POST["games"];
	} 
	$myGames = implode(" ",$games);
	if (isset($_POST["email"])) 
	{  
		$email = $_POST["email"];
	}
	$sql = "INSERT INTO `userdata` (`UserName`, `Password`, `Games`, `Skill`, `Email`) VALUES ('$user', '$password', '$myGames', 'n/a', '$email')";
			if(mysqli_query($conn, $sql)){
				echo "Account created successfully.";
				echo "<br>";
				echo "<a href='index.php'>Sign in</a>";
			} else{
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
			}
	?>
	</body>
</html>