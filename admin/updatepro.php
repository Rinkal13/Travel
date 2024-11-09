<?php

        include('connect.php');

        $id = $_POST['id'];
        $pnm = $_POST['pnm'];
        $img = $_FILES['img']['name'];
        $des = $_POST['des'];
        $price = $_POST['price'];
      
       
	move_uploaded_file($_FILES['img']['tmp_name'],"images/".$_FILES['img']['name']);
      
    
        $q = mysqli_query($cn,"update package SET pnm='$pnm',img='$img',des='$des',price='$price' WHERE id='$id'");
        echo "<script>alert('Package Update Successfully...')</script>";
        echo "<script>window.location='pdisplay.php'</script>";
    
    
    ?>