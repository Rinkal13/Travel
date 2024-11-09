<?php
		
	include("header.php");
?>
<html>
	<head>
		<title>Book</title>
		<link rel="stylesheet" href="style.css">
</head>
<body>

<h2 align="center">Book</h2>
<div class="container1">
<table>
	<tr class="ahead">
		
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Contact No</th>
		<th>Adhaar Number</th>
		<th>Gender</th>
		<th>Seat</th>
		<th>Check-in</th>
		<th>Check-out</th>
		<th>Location</th>
		<th></th>
		<th></th>
	</tr>

<?php
	include('connect.php');
	$q = mysqli_query($cn,"select * from book");

	while($r = mysqli_fetch_array($q))
	{
		echo "<tr>
			<td>".$r[1]."</td>
			<td>".$r[2]."</td>
			<td>".$r[3]."</td>
			<td>".$r[4]."</td>
			<td>".$r[5]."</td>
			<td>".$r[6]."</td>
			<td>".$r[7]."</td>
			<td>".$r[8]."</td>
			<td>".$r[9]."</td>
			<td>".$r[10]."</td>
			<td><a href='bookdel.php?id=".$r[0]." ' class='btn'>DELETE</a></td>
		
				
		</tr>";
	}
?> 
