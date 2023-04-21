<?php
require_once "connect.php";
session_start();

if (isset($_POST["login"])){
	if ((isset($_POST["username"]))&& (isset($_POST["password"]))){
		$username=$_POST["username"];
		$password=$_POST["password"];


		$req="select*from user where username='$username' and password='$password' ";

		$result = mysqli_query($con,$req) ;
	 	if ($result->num_rows>0) {
		 	while ($row = $result->fetch_assoc()) {
		 		$_SESSION['user'] = $row  ;  
		 		echo "<script>window.top.location='index.php'</script>" ;
		 	}
	 	} else {
	 		echo "Invalid user" ; 
	 	}





	}
	
}
?>



























<!DOCTYPE html>
<html>
<head>
	
	<title>Login</title>
	
	<?php include "imports.php"; ?>
	
	<style>
	body {font-family: Arial, Helvetica, sans-serif;}
	form {border: 3px solid #f1f1f1;}

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
		<h2 style="margin-top: 75px">Login Form</h2> 

	

	<form style="width:50%; margin-bottom:90px" action="#" method="post">
	 
	<?php if (isset($signedup)) { ?>
		<div class="alert alert-success" role="alert">
		  You have signed up successfully
		</div>
	<?php } ?>

	  <div class="container">
	    <label for="uname"><b>Username</b></label>
	    <input type="text" placeholder="Enter Username" name="username" required>

	    <label for="psw"><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="password" required> 
	        
	    <button type="submit" name="login">Login</button>
	    <label>
	      <input type="checkbox" checked="checked" name="remember"> Remember me
	    </label>
	   
	     <a class="nav-link color-green-hover" href="index.php?controller=utilisateur&action=signup">Sign up </a>
	    

	  </div>

	  
	</form>
	</center>
	
	<?php include "footer.php"; ?>

</body>
</html>

