<?php
    include("header.php");
?>
<html>
    <head>
        <link rel="stylesheet" href="cart.css">
    </head>
    <center><h1>list of Package</h1></center>
<div class="container1">

<center><table cellpadding=20>
    <tr class="ahead">
        <th >Image</th>
        <th>Package Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Amount</th>
        <th></th>   
    </tr>
<?php
    include('connect.php');
    //session_start();
    $unm =$_SESSION['username'];
    
    if(isset($_POST['submit']))
    {
        
        $id=$_POST['id'];
        $qty=$_POST['qty'];
       
        $amt=0;
        $p=mysqli_query($cn,"select * from package where id='$id'");
       while($rec=mysqli_fetch_array($p))
       {
        $amt= $rec[4]*$qty;
        $q=mysqli_query($cn,"insert into cart(unm,img,pnm,price,qt,amt,stat) values('$unm','$rec[2]','$rec[1]','$rec[4]','$qty','$amt','pending')");
       
       //INSERT INTO `cart`(`id`, `unm`, `img`, `pnm`, `price`, `qt`, `amt`, `stat`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
       }
        //$q = mysqli_query($cn,"INSERT INTO `cart` (`id`, `unm`, `img`, `pnm`, `price`, `qt`, `tot`, `amt`, `stat`) VALUES ('', '$unm', '$img', '$pnm', '$price', '$qt', '$tot', '$amt', '$stat')");
        //$q = mysqli_query($cn,"INSERT INTO `cart` (`id`, `unm`, `img`, `pnm`, `price`, `qt`, `tot`, `amt`, `stat`) VALUES ('', '$unm', '$img', '$pnm', '$price', '$qt', '$tot', '$amt', 'pending');");
    }
    //session_start();
   //$unm =$_SESSION['username'];
    //$q1 = mysqli_query($cn,"select * from cart where unm='$unm' and stat='panding'");
    //$s = mysqli_query($cn,"select sum(amt) as tot from cart where unm='$unm' and stat='panding'");
    //$t = mysqli_fetch_array($s);
    //$tot = $t['tot'];

    $q3 = mysqli_query($cn,"select * from cart where unm='$unm'");
    
    while($r=mysqli_fetch_array($q3))
    {
        echo "<tr><th><img src='../images/".$r[2]."' height=100 width=100></th>
            <th>".$r[3]."</th>
            <th>".$r[4]."</th>
            <th>".$r[5]."</th>
            <th>".$r[6]."</th>
            <th><a href='cdel.php?id=".$r[0]."' class='btn'>DELETE</a></th>
            <th ><a href='checkout.php' class='btn'>CONFIRM</a></th>
            </tr>";
    }

	//echo "<div><div>Total amount : ".$tot."</div>";
	//echo "<div><div>To Checkout, Click here    =>>   <a href='checkout.php'>Procced to Chekout</a></div></div>";

?>
