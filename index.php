<?php
	session_start();
	//$_SESSION["user"] = "";
?>
<html>
	
	<head>
		
		<link type="text/css" rel="stylesheet" href="stylesheet.css">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<?php
			include('connection.php');
			include('header.php');
		?>
	</head>
	
	<body>
		<?php
			
		?>
		<form action="login.php" method="post">
		  Username:<br>
		  <input type="text" name="username">
		  <br>
		  Password:<br>
		  <input type="password" name="password">
		  <br><br>
		  <input type="submit" value="Sign in">
		  <input type="button" value="Register" onclick="window.location.href='register.php'" />
		</form> 
	</body

	</html>
