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
		<form action="register2.php" method="post">
		  Username:<br>
		  <input type="text" name="login">
		  <br>
		  Password:<br>
		  <input type="password" name="password">
		  <br>
		  Confirm password: <br>
		  <input type="password" name="confirmed">
		  <br>
		  Email: <br>
		  <input type="text" name="email"><br>
		  Games:<br>
		  <input type="checkbox" name="games[]" value="PUBG"> PUBG<br>
		  <input type="checkbox" name="games[]" value="CS:GO"> CS:GO<br>
		  <input type="checkbox" name="games[]" value="LoL"> LoL<br>
		  <input type="checkbox" name="games[]" value="Fortnite"> Fortnite<br>
		  <br>
		  <input type="submit"/>
		</form> 
	</body>
</html>
