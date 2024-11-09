<?php
	include("connect.php");

	if(isset($_POST['submit']))
	{
			$pnm = $_POST['pnm'];
			$img = $_FILES['img']['name'];
			$des = $_POST['des'];
			$price = $_POST['price'];
			
			move_uploaded_file($_FILES['img']['tmp_name'],"images/".$_FILES['img']['name']);

			$q=mysqli_query($cn,"SELECT * FROM package where id='$id'");
	
			if(mysqli_num_rows($q)!=0)
			{
				echo "<script>Pacakge already add...</script>";
				echo"<script>window.location='package.php'</script>";
			}
			else
			{
				$q=mysqli_query($cn,"INSERT INTO `package` (`id`,`pnm`, `img`, `des`, `price`) VALUES ('','$pnm' ,'$img', '$des', '$price');");
				echo"<script>alert('Add Package Successfully')</script>";
				echo"<script>window.location='package.php'</script>";
			}

		}				
	else
	{
		echo"";
	}
?>