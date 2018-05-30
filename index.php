<html>
	
	<head>
		<title>Squad Finder</title>
		<link type="text/css" rel="stylesheet" href="stylesheet.css">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "squadfinder";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			echo "Connected successfully";
			
				
			/*when register
			$sql = "INSERT INTO `users` (`UserName`, `Password`, `Games`, `Skill`) VALUES ('tester', 'pwd3', 'games?', '0')";
			if (mysqli_query($conn, $sql)) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}*/
			
			
			$conn->close();
		?>
	</head>
	
	<body>
		<p> E</p>
	</body

	</html>
