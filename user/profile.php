<html>
<head>
	<title>Your Profile Page</title>
</head>

<body>

<?php
	include("header.php");
   include("connect.php");
?>
<h1 align="center">Your Profile</h1>

 
 <center><table cellpadding=10>
	<tr>
		<th>Username</th>
    </tr>
    <tr>
		<th>Email</th>
    </tr>
    <tr>
		<th>Contact Number</th>
     </tr>
     <tr>
     <th>Birth Date</th>
     </tr>
	 <tr><th></th></tr>
	 <tr><th></th></tr>
	
<?php
	$q = mysqli_query($cn,"select * from signup where id= $id");

	while($r = mysqli_fetch_array($q))
	{
		echo "<tr>
			<th>".$r[1]."</th>
			
		     <th>".$r[3]."</th>
			<th>".$r[4]."</th>
			<th>".$r[5]."</th>
			<th><a href='update.php?id=".$r[0]." '>UPDATE</a></button></th>

		</tr>";
	}
?> 

</table></center>
<a href="logout.php">Logout</a>
</body>

</html>

