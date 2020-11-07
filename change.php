<?php 
	$con = mysqli_connect('127.0.0.1', 'root','','insta');
	$sql = "UPDATE posts SET img='{$_GET["img"]}', text='{$_GET["text"]}' WHERE id='{$_GET["id"]}'";
	header("Location: index.php");

	if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
		} else {
		    echo "Error updating record: " . $conn->error;
		};
 ?>