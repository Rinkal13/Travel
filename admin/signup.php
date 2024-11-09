<?php
		
	include("header.php");
?>

<h2 align="center">Signup</h2>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="style.css">
</head>
<div class="container1">
	
<table cellpadding=10>
	<tr class="ahead">
		
		<th>Username</th>
		<th>Password</th>
		<th>Email</th>
		<th>Mobile No.</th>
		<th>Date Of Birth</th>
		<th>Utype</th>
		<th></th>
		<th></th>
	</tr>

<?php
	include('connect.php');
	$q = mysqli_query($cn,"select * from signup where utype='user' ");

	while($r = mysqli_fetch_array($q))
	{
		echo "<tr>
			<td>".$r[1]."</td>
			<td>".$r[2]."</td>
			<td>".$r[3]."</td>
			<td>".$r[4]."</td>
			<td>".$r[5]."</td>
			<td>".$r[6]."</td>
			<td><a href='signupd.php?id=".$r[0]." ' class='btn'>UPDATE</a></td>
			<td><a href='signdel.php?id=".$r[0]." ' class='btn'>DELETE</a></td>
		
				
		</tr>";
	}
?> 
