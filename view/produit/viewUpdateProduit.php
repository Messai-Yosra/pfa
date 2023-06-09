<?php
// include_once "../connect.php";
//session_start(); 
?>



<!DOCTYPE html>
<html>
<head>
	
	<title>Create Category</title>
	
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
		<h2 style="margin-top: 26px">Update Product</h2> 

	

	<form style="width:50%; margin-bottom:90px" action="index.php?controller=produit&action=updated&id=<?=$up['id']?>" method="post"> 
	 
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

	    <input type="hidden" name="id_user" value="<?php echo $_SESSION["user"]["id"] ;  ?>"  required> 

	    <label for="uname"><b>Name </b></label>
	    <input type="text" name="name" value="<?php echo $up["name"] ;  ?>" required> 
	    
        <label for="description"><b>Description </b></label>
	    <input type="text" name="description" value="<?php echo $up["description"] ;  ?>" required> 
	        
        <label for="image"><b>image </b></label>
	    <input type="text" name="image" value="<?php echo $up["image"] ;  ?>" required> 
        
        <label for="price"><b>Price </b></label>
	    <input type="text" name="price" value="<?php echo $up["prix"] ;  ?>" required> 
	    
        <label for="category"><b>Category </b></label>
        <select name="name_category">
            <?php foreach ($categories as $c){  
                    if ($c["name_category"] == $up["name_category"]){ ?>
                        <option value="<?php echo $c["name_category"] ;  ?>" selected><?php echo $c["name_category"] ;  ?></option>
                    <?php } else { ?>
                        <option value="<?php echo $c["name_category"] ;  ?>"><?php echo $c["name_category"] ;  ?></option>
                    <?php }

            ?>

            <?php  } ?>
        </select>
	    
	    <button type="submit" name="login">Create</button> 
	    

	  </div>

	  
	</form>
	</center>
	 

</body>
</html>

