<?php
	include('connect.php');
	if(isset($_POST['submit']))
	{
		$unm=$_POST['unm'];
		$pass=$_POST['pass'];
		$email=$_POST['email'];
		$cno=$_POST['cno'];
		$dob=$_POST['dob'];
		$q=mysqli_query($cn,"select * from signup where unm='$unm' and pass = '$pass'");
		if(mysqli_num_rows($q)!=0)
		{
			echo "<script>alert('User Already Exist Try Another Username...')</script>";
			echo "<script>window.location='signup.php'</script>";
		}
		else
		{
			$q=mysqli_query($cn,"INSERT INTO `signup` (`id`, `unm`, `pass`, `email`, `cno`, `dob`, `utype`) VALUES ('', '$unm', '$pass', '$email', '$cno', '$dob', 'user');");
			echo "<script> alert('registration successfully')</script>";
			echo "<script>window.location='user/index.php'</script>";		
		}
	}
	else
	{
		echo "";
	}
?>