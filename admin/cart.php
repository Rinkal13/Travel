<?php
		
	include("header.php");
?>

<h2 align="center">Cart</h2>
<head>
	<title>cart</title>
	<link rel="stylesheet" href="cart.css">
</head>
<div class="container1">
	
<table cellpadding=10>
	<tr class="ahead">
		
		<th>Username</th>
		<th>image</th>
		<th>Name</th>
		<th>Price</th>
		<th>How many</th>
		<th>Amount</th>
        <th>Stat</th>
		<th></th>
		<th></th>
	</tr>

<?php
	include('connect.php');
	$q = mysqli_query($cn,"select * from cart");

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
            <td></td><td></td>
			<td><a href='cartdel.php?id=".$r[0]." ' class='btn'>DELETE</a></td>
		
				
		</tr>";
	}
?> 
