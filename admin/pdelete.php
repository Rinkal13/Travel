<?php

	$id = $_GET['id'];

	include("connect.php");	

	$q = mysqli_query($cn,"DELETE FROM `package` WHERE id = '$id' ");

	echo "<script>window.location='pdisplay.php'</script>";	
	
?>
	


