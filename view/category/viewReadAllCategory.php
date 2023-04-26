<?php
/* Les vues sont des fichiers qui contiennent du
code HTML et des echo permettant d’afficher
les variables pré-remplies par le contrôleur */

//$tab_u est un objet ModelUtilisateur donné par le controllerUtilisateur
	foreach ($tab_u as $u){ 
	  //$ncin=$u->getncin();
	//   echo " ncin : 
	//   <a href='index.php?controller=utilisateur&action=read&ncin=$ncin'>$ncin</a></p>";
	// echo "<div class= 'updt'>
 	// 	<a href='index.php?controller=utilisateur&action=update&ncin=$ncin'> Modifier </a>
 	// </div>
 	// <div class= 'supp'>
 	// 	<a href='index.php?controller=utilisateur&action=delete&ncin=$ncin'> Supprimer </a>
 	// </div><hr/>";
	}
?>

<style> 
.buttonTable { /* Green */
    border: none;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    border-radius : 8px ; 
}

.buttonTable:hover{
    color : red ;
}

</style>

<center class="table-responsive">
    <a href="<?php echo 'index.php?controller=category&action=create'; ?>" class="buttonTable" style="left : 60% !important; margin-top : 40px ;
    margin-bottom : 30px; margin-left : 50%;
    background-color: #6488FF; ">
        Add Category
    </a>
    <table class="table" style="width : 60% ; margin-bottom : 150px  " >
    <thead>
        <tr>
        <th style="width : 70%">Name</th>
        <th scope="col">Action</th> 
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tab_u as $u){ 
            $id = $u["id"] ;    
        ?>
        
        <tr>
        <th scope="row"> <?php echo $u["name_category"]  ; ?></th>
        <td>
            <a href="" class="buttonTable" style="background-color : green ;">Edit</a>
            <a href="<?php echo 'index.php?controller=category&action=delete&id='.$id; ?>" class="buttonTable" style="background-color : red ;">Delete</a>

        </td> 
        </tr>
        <?php } ?>
    </tbody>
    </table> 
</center>




<!-- <div class= 'add'>
	<a href='index.php?controller=utilisateur&action=create'>Add Category</a>
</div> -->
