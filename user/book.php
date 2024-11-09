<html>
    <head>
        <title>Book</title>
        <link rel="stylesheet" href="book.css">
    </head>
    <body>
        <?php
            include("header.php");
        ?>

        <div class="container">
        <form action="bookpro.php" method="POST">
            <h2>BOOK NOW</h2>
            <div class="box">
                <input type="text" name="fname" class="box" placeholder="Enter Firstname"required>
                <input type="text" name="lname" class="box"   placeholder="Enter Lastname"required>
                <input type="email" name="email"class="box"  placeholder="Enter Email" required>
                <input type="text" name="cno" class="box" placeholder="Enter Contact No" maxlength="10"required>
                <input type="text" name="ano" class="box" placeholder="Enter Aadhar No" maxlength="12"required>
                <input type="text" name="gen" class="box" placeholder="Enter Gender"required>
                <input type="number" name="seat" class="box"  placeholder="Enter Seat"required>
                <input type="date" name="chin" class="box"  required>
                <input type="date" name="chout" class="box"  required>
                <input type="text" name="lnm" class="box" placeholder="Enter Location"required>
                <input type="submit" name="submit" value="BOOK" id="submit">
            </div>  
        </form>
        </div>
    </body>
</html>