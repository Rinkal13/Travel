<?php
    session_start();
    if(!isset($_SESSION['adminname']))
    {
        header("location:../index.php");
    }
?>
<html>
<head>
<title>Index</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<table cellpadding="20" class="atab">
<tr class="atr">
<th><a href="index.php">HOME</a></th>
<th><a href="package.php">PACKAGES</a></th>
<th><a href="pdisplay.php">SHOW</a></th>
<th><a href="book.php">BOOK</a></th>
<th><a href="feedback.php">FEEDBACK</a></th>
<th><a href="signup.php">Signup</a></th>
<th><a href="cart.php">Cart</a></th>
<th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
<th><a href="logout.php">LOGOUT</a></th>
</tr>
</table>
 
</body>