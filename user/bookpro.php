<?php
    include('connect.php');
	if(isset($_POST['submit']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
        $cno=$_POST['cno'];
		$ano=$_POST['ano'];
		$gen=$_POST['gen'];
        $seat=$_POST['seat'];
		$chin=$_POST['chin'];
		$chout=$_POST['chout'];
		$lnm = $_POST['lnm'];
		
		$q=mysqli_query($cn,"insert into book values('','$fname','$lname','$email','$cno','$ano','$gen','$seat','$chin','$chout','$lnm')");
        echo "<script>alert('Booking Succesfully....')</script>";
		echo "<script>window.location='message.php'</script>";		
	}
	else
	{
		echo "";
	}
?>