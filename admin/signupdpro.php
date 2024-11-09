<?php
		
	
	include("connect.php");	

	$id = $_POST['id'];
	$unm = $_POST['unm'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$cno = $_POST['cno'];
	$dob = $_POST['dob'];

	$q = mysqli_query($cn,"update signup set unm ='$unm',pass='$pass',email ='$email',cno='$cno',dob='$dob' where id = '$id' ");
	echo "<script>alert('Update Successfully...')</script>";
	echo "<script>window.location='signup.php'</script>";
?>

