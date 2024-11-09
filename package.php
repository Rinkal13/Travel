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
<table align="center">
	<h3 align="center">PACKAGE</h3>
<?php

	$q = mysqli_query($cn,"select * from package");

	while($r = mysqli_fetch_array($q))
	{
		echo "<form method='POST' action='#' name='f1'>"; 
		echo "<table class='tab'>";
		echo "<tr><td class='photo1' rowspan='3'><img src='".$r["img"]."'></td>";
		echo "<td class='head'>".$r[1]."</td><td></td></tr>";
		echo "<tr><td  class='des'><h4 align='jusitfy'>".$r[3]."</h4></td></tr>";
		echo "<tr><td class='price'>Rs. ".$r[4]."/- <a href='login.php' class='addtocart'>Add to Cart</a></td></tr>";
	}
?> 

</table></center>
</div>
</body>

</html>
