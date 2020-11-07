<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$con = mysqli_connect('127.0.0.1', 'root','','insta');
		$query = mysqli_query($con, "SELECT * FROM users");
		echo "string";		
		?>
</body>
</html>