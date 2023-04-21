<?php
require_once "connect.php";
session_start();

		if ((isset($_POST["username"])) && (isset($_POST["password"])) && 
		(isset($_POST["mail"])) && (isset($_POST["confpassword"])) && ($_POST["password"]== $_POST["confpassword"])) {
		$username=$_POST["username"];
		$password=$_POST["password"];
		$adress=$_POST["mail"];


		$req="INSERT INTO user (username, password, adresse)
 		VALUES ('$username', '$password', '$adress')";

		$result = mysqli_query($con,$req) ;
	 	
		echo $result ; 
	 	if ($result) {
		 	 
		 		echo "<script>window.top.location='index.php?controller=utilisateur&action=login&signedup=1'</script>" ;
		 	 
	 	} else {
	 		echo "Invalid user" ; 
	 	}
 



	
}
?>




<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	
	<?php include "imports.php"; ?>
	
	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
		}
		
		form {
			border: 3px solid #f1f1f1;
		}

		input[type=text], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}

		button {
			background-color: #04AA6D;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
		}

		button:hover {
			opacity: 0.8;
		}

		.cancelbtn {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
		}

		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
		}

		img.avatar {
			width: 40%;
			border-radius: 50%;
		}

		.container {
			padding: 16px;
		}

		span.psw {
			float: right;
			padding-top: 16px;
		}

		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
			span.psw {
				display: block;
				float: none;
			}
			
			.cancelbtn {
				width: 100%;
			}
		}
	</style>
</head>
<body>
	<?php include "navbar.php"; ?>
	
	<center> 
		<h2 style="margin-top: 75px">Sign up Form</h2> 
		<form style="width:50%; margin-bottom:90px" action="#" method="post">
			<div class="container">
				<label for="uname"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
					

				<label for="mail"><b>Adress</b></label>
				<input type="text" placeholder="Enter Adress" name="mail" required> 
				
				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required> 

				<label for="confpsw"><b>Confirm Password</b></label>
				<input type="password" placeholder="Confirm Password" name="confpassword" required> 
				
			        
			   
				<button type="submit" name="signup">Sign up</button>
				
			</div>
			
		</form>
	</center>
	
	<?php include "footer.php"; ?>
</body>
</html>

