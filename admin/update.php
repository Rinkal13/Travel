<?php
	include("header.php");
	include("connect.php");
?>
<html>
    <head>
        <title>Update Prodect</title>
	
    </head>
	<style>
	.container1
{
    display: flex;
    height: 500px;
    width: 500px;
    /* border: 1px solid black; */
    margin: auto;
    margin-top: 50px;
    box-shadow: 15px 15px 20px black;
}
.p1
{
	margin-right: 300px;
}
.box
{
    padding: 12px;
    width: 65%;
    margin: 15px;
    border: 1px solid black;
    outline: none;
    border-radius: 20px;
}
#submit
{
    padding: 12px 60px;
    width: 100%;
    margin-top: 40px;
    background-color: #09647a;
    color: white;
    border-radius: 20px;
    font-weight: bold;
    border: none;
    outline: none;
	margin-left: 36px;
}
#submit:hover
{
    cursor: pointer;
    background-color: #09647a;
    color: white;
}
</style>
	
    <body>

		<center><h1>UPDATE PACKAGE</h1></center>
<div class="container1">
<table>
<?php
	$id = $_GET['id'];

	$q = mysqli_query($cn,"select * from package where id = '$id' ");

	echo "<form action='updatepro.php' method='POST' enctype='multipart/form-data'>";

	while($r = mysqli_fetch_array($q))
	{
		echo "<input type='hidden' name='id' value=".$id.">"; 
		
		echo "<tr><td class='p1'>Package Name: :</td>";
		echo "<td><input type='text' class='box'name='pnm' value=".$r[1]."></td></tr>";

		echo "<tr><td>Image :</td>";
		echo "<td><input type='file' class='box' name='img' value=".$r[2]."></td></tr>";

		echo "<tr><td >Description :</td>";
		echo "<td><input type='text' class='box' name='des' value=".$r[3]."></td></tr>";

		echo "<tr><td >Price :</td>";
		echo "<td><input type='text' class='box'name='price' value=".$r[4]."></td></tr>";


	}
	echo "<tr><td><input type='submit' id='submit' name='update' value='Update'></td></tr>";
?>
 </table>
     </form>
    </body>
</html>
	


