<?php
	include("header.php");
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<h2 align="center">Add Pacakges</h2>
<div class="container">
<form action="packagepro.php" method="POST" enctype="multipart/form-data">
	<table align="center">
		
		<tr>
			<td>Enter Package Name:</td>
			<td><input type="text" name="pnm" class="box" placeholder="Package Name"></td>
		</tr>

		<tr>
			<td>Enter Image:</td>
			<td><input type="file" name="img" class="box"></td>
		</tr>

		<tr>
			<td>Enter Description:</td>
			<td><input type="text" name="des" class="box" placeholder="Description"></td>
		</tr>

		<tr>
			<td>Enter Price:</td>
			<td><input type="text" name="price" class="box"  placeholder="Price"></td>
		</tr>

	

		<tr>
			<td><input type="submit" name="submit" value="Add Pacakge" id="submit"></td>
		</tr>
	</table>
</form>
</body>
</html>
