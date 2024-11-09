<html>
    <head>
        <title>Signup</title>
        <link rel="stylesheet" href="signup.css">
    </head>
    <body>
        <div class="container">
            <form action="signuppro.php" method="post">
                <h2>Signup</h2>
                <input type="text" name="unm" class="box" placeholder="Enter Username" pattern="[a-z,A-Z]*"required>
                <input type="password" name="pass" class="box" placeholder="Enter Password" pattern="[a-z,A-Z,@,_]*" maxlength="8"required>
                <input type="email" name="email" class="box" placeholder="Enter Email" required>
                <input type="text" name="cno" class="box" placeholder="Enter Phone Number" pattern="\d{10}" maxlength="10"required>
                <input type="date" name="dob" class="box" placeholder="Enter Birthdate" required>

                <input type="submit" name="submit" value="Signup" id="submit">
                <a href="login.php"  class="back">Go Back</a>
                
            </form>

            <div class="side">
                <img src="FP1.png">
            </div>
        </div>
    </body>
</html>