<?php
    include('connect.php');
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$des=$_POST['des'];

		$q=mysqli_query($cn,"insert into feedback values('','$name','$email','$des')");
		echo "<script>window.location='index.php'</script>";		
	}
	else
	{
		echo "";
	}
?>