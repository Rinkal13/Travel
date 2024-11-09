<html>
	<head>
		<title>Reset Password</title>
		<style>
		*{
			font-family: Cambria Math;
    		overflow: hidden;
    		margin: 0%;
			font-weight: bold;
		}
		
	/* .container
	{
		display: flex;
		height: 650px;
		width: 1050px;
		margin: auto;
		margin-top: 50px;
		box-shadow: 15px 15px 20px black;
		background-color: whitesmoke;
	} */

		.heading{
			left: 23%;
			position: absolute;
			font-size: 65px;
			/* animation-name: head;
			animation-duration: 2s;
			animation-fill-mode: forwards;
			color: #09647a; */
		}
		/* @keyframes head{
			from{top: -25%;}
			to{top: 10%;}
		} */
		.center{
			z-index: 2;
			color: #09647a;
			width: 50%;
			height: 100%;
			position: absolute;
			left: 23%;
			top: 0%;
		}
		.info{
			width: 400px;
			color: black;
			font-size: x-large;
			margin-left:25%;
			margin-top: 35%;
		}
			/* animation-name: fade;
			animation-duration: 3s;
			animation-fill-mode: forwards;
		}
		@keyframes fade{
			from{opacity: 0%;}
			to{opacity: 100%;}
		} */
		input{
			padding-left: 17px;
			font-size: large;
			margin-left: 10%;
			border-radius: 25px;
			border: 2px black solid;
			width: 350px;
			height: 40px;
			transition: .8s ease-in-out;
		}
		input:hover{
			border: 2px #09647a solid;
		}
		.button{
			width: 150px;
			font-size: 27px;
			border: 2px solid black;
			color: #09647a;
			background-color: white;
			transition: .8s ease-in-out;
			padding-left: 5px;
		}
		.button:hover{
			background-color:#09647a;
			color: white;
			border: black 2px solid;
		}
		.login{
    		height: 40px;
    		width: 40px;
    		position: absolute;
    		top: 600px;
    		left: 395px;
    		background-image:url(lb1.png);
    		border-radius: 50%;
    		background-size: 40PX;
    		color: rgba(240, 248, 255, 0);
    		transition: .4s ease-in-out;
    		background-repeat: no-repeat;
			animation-name: fade;
			animation-duration: 3s;
			animation-fill-mode: forwards;
		}
		.login:hover{
    		width: 276px;
    		border-radius: 30px;
    		background-repeat: no-repeat;
    		background-image:url(lb2.png);
    		background-color:#09647a;   
    		background-position: 299px;
    		color: white;
    		text-decoration: none;
    		font-size: 27px;
    		left: 250px;
			padding-top:10px;
    		padding-left: 65px;
		}
		/* .bgtable{
			width: 100%;
			height: 150%;
			position: absolute;
			left: 0%;
			z-index: 1;
      		animation: fall linear infinite;
    		animation-duration: 5s;
		}
    	@keyframes fall {
      		0% {
        		bottom: 0%;
      		}
      		100% {
        		bottom: -15%;
      		}
    	}
    	#small {
      		height: 50px;
			width: 50px;
			transform: rotate(45deg);
    	}
    	#medium {
			height: 70px;
			width: 70px;
			transform: rotate(120deg);
    	}
    	#large {
			height: 90px;
			width: 90px;
			transform: rotate(260deg);
    	}*/
		/* .wave {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100%;
            background: white;
            z-index: -1;
        }  */
		</style>
	</head>
	<body>
	<div class="container">
		<form action="forgetpro.php" method="POST">
			
			<div class="center">
			<div class="heading">
				Forget Password
			</div>
			<table align="center" class="info">
				<tr>
					<td>Enter Email:</td>
				</tr>
				<tr></tr><tr></tr><tr></tr>
				<tr>
					<td><input type="text" name="email" required></td>
				</tr>
				<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
				<tr>
					<td>Phone No:</td>
				</tr>
				<tr></tr><tr></tr><tr></tr>
				<tr>
					<td><input type="text" name="cno" required></td>
				</tr>
				<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
				<tr>
					<td><center><input type="submit" name="submit" value="Submit" class="button"></center>
				</tr>
			</table>
			<a href="login.php"  class="login">Go Back to Login ?</a>
			</div>
		</form>
	</body>
</html>

