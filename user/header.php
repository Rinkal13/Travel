 
<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:../index.php");
    }
?>
<html>
<head>
<title>Index</title>
<link rel="stylesheet" href="header.css">
</head>
<body>

<div class="back">
        <img class="logo" src="L2.png">
        <a href="index.php">HOME</a>
        <a href="package.php">PACKAGES</a>
        <a href="book.php">BOOK</a>
        <a href="#footer">ABOUT US</a>
        <a href="feedback.php">FEEDBACK</a>
        <a href="cart.php">YOUR CART</a>
    </div>
<a href="logout.php" class="lbtn">LOGOUT</a>
</body>
</html>
  


