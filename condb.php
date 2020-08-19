<html>
	<head>
		<title> One Piece Figure </title>
	</head>
	<body>
		<?php
			$ServerName = "localhost";
			$DbName = "se";
			$UserName = "root";
			$Password = "12345678";
			$conn = new PDO ("mysql:host=$ServerName;dbname=$DbName",$UserName,$Password);
		?>
	</body>
</html>
