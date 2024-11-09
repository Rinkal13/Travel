<?php

	$id = $_GET['id'];

	include("connect.php");	

	$q = mysqli_query($cn,"DELETE FROM `cart` WHERE id = '$id' ");

	echo "<script>window.location='cart.php'</script>";	
	
?>
