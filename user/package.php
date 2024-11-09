<?php
    include("connect.php");
?>
<html>
    <head>
        <title>Display Packages</title>
        <link rel="stylesheet" href="package.css">
		<style>
		.cont{margin-top:3%}
		</style>
		
    </head>
	
    <body>
	<?php include('header.php');?>
		<div class="cont">
    <h1 align="center">Pacakage Display</h1>
<table align="center">
<?php

	$q = mysqli_query($cn,"select * from package");

	while($r = mysqli_fetch_array($q))
	{
		echo "<form method='POST' action='cart.php' name='f1'>"; 
		echo "<table class='tab'>";
		echo "<tr><td class='photo1' rowspan='5'><img src='".$r["img"]."'></td></tr>";
		echo "<td class='head'>".$r[1]."</td><td></td></tr>";
		echo "<tr><td class='des'><h4 align='jusitfy'>".$r[3]."</h4></td></tr>";
		echo "<tr><td class='price'>Rs. ".$r[4]."/-</td>";
		echo "<input type='hidden' name='id' value=".$r[0]."></td><td>";
		echo "Person <input type='number' name='qty' style='border:1px solid black;font-size:25px width:30px' class='person'></td>";
		echo "<td><input type='submit' name='submit' value='Add to cart' class='addtocart'></form></td></tr>";
		//echo "<td><a href='cart.php' class='addtocart'>Add to Cart</a></td></tr>";
	}
?> 

</table></center>
</div>
</body>

</html>
