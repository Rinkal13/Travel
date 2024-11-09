
<html>
    <head>
        <title>
            Feedback
        </title>
  
        <link rel="stylesheet" href="feedback.css">
        
    </head>
    <?php include("header.php");?>
    <body>
        <div class="container">
            <form action="feedbackpro.php" method="POST">
            <h2>Feedback</h2>
           <input type="text" name="name" class="box" placeholder="Enter Username"required>
           <input type="text" name="email" class="box" placeholder="Enter Email" required>
           <input type="text"  name="des" class="box" placeholder="Enter Feedback" required></textarea>
           <input type="Submit" name="submit" value="Submit" id="submit">
           <!-- <a href="index.php" class="back">Go Back</a> -->
               
        </form>
        <div class="side">
                <img src="fbicon.png">
            </div>
</div>  
    </body>
</html>
