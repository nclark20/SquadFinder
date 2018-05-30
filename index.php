<html>
	
	<head>
		<title>Squad Finder</title>
		<link type="text/css" rel="stylesheet" href="stylesheet.css">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";

			// Create connection
			$conn = new mysqli($servername, $username, $password);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			echo "Connected successfully";
			
				
			
			$conn->close();
		?>
	</head>
	
	<body>
		
	</body

	</html>
