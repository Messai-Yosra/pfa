<?php
// include_once "../connect.php";
//session_start(); 
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
	 
	
	<center> 
		<h2 style="margin-top: 26px">Update Category</h2> 

	

	<form style="width:50%; margin-bottom:90px" action="index.php?controller=category&action=updated&id=<?=$up['id']?>" method="post"> 
	 
	<?php if (isset($error)) { ?>
		<div class="alert alert-danger" role="alert" style="margin-top : 10px ; font-size : 18px">
			<?php echo $error ;  ?> 
		</div>
	<?php } ?>

	<?php if (isset($done)) { ?>
		<div class="alert alert-success" role="alert" style="margin-top : 10px ; font-size : 18px">
			<?php echo $done ;  ?>
		</div>
	<?php } ?>

	
	  <div class="container">
	    <input type="hidden" value="<?php echo $up["id"];  ?>" name="id" required>

	    <label for="uname"><b>Name</b></label>
	    <input type="text" value="<?php echo $up["name_category"];  ?>" name="name_category" required> 
	        
	    <button type="submit" name="login">Update</button> 
	    

	  </div>

	  
	</form>
	</center>
	
	<?php //include "../footer.php"; ?>

</body>
</html>

