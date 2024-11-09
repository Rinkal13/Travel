<html>
<head>
	<title>Admin Package Page</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

<?php
	include("header.php");
   include("connect.php");
?>
<h1 align="center">Pacakage Display</h1>

 
 <center><table cellpadding=10>
	<tr class="ahead">
		<th>Name</th>
		<th>Image</th>
		<th>Description</th>
		<th>Price</th>
	
		<th></th>
		<th></th>
	</tr> 
<?php
	$q = mysqli_query($cn,"select * from package");

	while($r = mysqli_fetch_array($q))
	{
		echo "<tr>
			<th>".$r[1]."</th>
			<th><img src='../images/".$r[2]."' height=100 width=100></th>
			<th>".$r[3]."</th>
			<th>".$r[4]."</th>
			
			<th><a href='update.php?id=".$r[0]." ' class='btn'>UPDATE</a></button></th>
			<th><a href='pdelete.php?id=".$r[0]." ' class='btn'>DELETE</a></button></th>
		</tr>";
	}
?> 

</table></center>

</body>

</html>

