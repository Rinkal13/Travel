
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="container">
            <form action="loginpro.php" method="post">
                <h2>Login</h2>
                <input type="text" name="unm" class="box1" placeholder="Enter Username" required>
                <input type="password" name="pass" class="box1" placeholder="Enter Password">

                <input type="submit" name="submit" value="Login" id="submit">
                <a href="signup.php">Signup</a>
                <a href="forget.php">Forget Password</a>
                <a href="index.php" class="login">Go Back</a>
            </form>

            <div class="side">
                <img src="lg.png">
            </div>

        </div>
    </body>
</html>