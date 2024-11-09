<?php

	$id = $_GET['id'];

	include("connect.php");	

	$q = mysqli_query($cn,"DELETE FROM `book` WHERE id = '$id' ");

	echo "<script>window.location='book.php'</script>";	
	
?>
