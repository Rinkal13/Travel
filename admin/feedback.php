<?php
    include('header.php');
	include('connect.php');
?>
<html>
	<head>
		<title>Feedback</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<h2 align="center">Feedback</h2>
	<div class="container2">
    <table height=500 width=500 align="center">
	<tr class="ahead2">
		<th>Name</th>
		<th>Email</th>
		<th>Feedback</th>	
		<th></th>
	</tr>
</html>
<?php
	$q=mysqli_query($cn,"select * from feedback");
	while($r=mysqli_fetch_array($q))
	{
		echo "<tr><td>".$r[1]."</td>
		<td>".$r[2]."</td>
		<td>".$r[3]."</td>
		<td><a href='feedbackdel.php?id=".$r[0]."' class='btn1'>DELETE</a></td>
		</tr>";
	}
?>
