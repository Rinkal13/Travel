<?php
	session_start();
		
		$unm=$_POST['unm'];
		$pass=$_POST['pass'];
		
		include('connect.php');
		$q = mysqli_query($cn,"select*from signup where unm='$unm' and pass ='$pass'");
		$r = mysqli_fetch_row($q);

		if($r[1]==$unm && $r[2]==$pass && $r[6]=='user')
		{
			$_SESSION['username']=$_POST['unm'];
			echo "<script> document.location='index.php'</script>";
		}			
		elseif($r[1]==$unm && $r[2]==$pass && $r[6]=='admin' )
		{
			$_SESSION['adminname']=$_POST['unm'];
			echo "<script> document.location='index.php'</script>";
		}
		else
		{
			echo "<script>alert('User Not exist...')</script>";
			echo "<script> document.location='index.php'</script>";
		}

		