<?php 
		$connect = mysqli_connect("127.0.0.1","root","","insta");

		$text_vstav = "INSERT INTO posts (img, text) VALUES ('{$_GET["img"]}', '{$_GET["text"]}')";

		$zapros_vstav = mysqli_query($connect, $text_vstav);
		header("Location: index.php")
 ?>