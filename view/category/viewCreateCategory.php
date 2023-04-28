<center>
<form method="POST" action="index.php?controller=category&action=created">
  <fieldset>
     <legend>Add Category</legend> 
	 <p>

    <?php if (isset($done)) { ?>
		<div class="alert alert-success" role="alert" style="margin-top : 10px ; font-size : 18px">
			<?php echo $done ;  ?>
		</div>
	  <?php } ?>



     <label for="name_category">Category Name</label> :
     <input type="text"  name="name_category"  id="name_category"   required/>
     </p> 
	  
     

    <input  type="submit" value="Submit" style="margin-top : 40px ;
    margin-bottom : 30px; 
    background-color: #6488FF; " />
   </fieldset> 
</form>
</center>