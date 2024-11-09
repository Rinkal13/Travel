<?php
	session_start();
	if(!isset($_SESSION['user']))
	{
		header("location:../login.php");
	}
?>
<html>
<body>
Welcome	<?php echo $_SESSION['user'];	?> 
<a href="logout.php">LogOut</a>
</body>
</html>
