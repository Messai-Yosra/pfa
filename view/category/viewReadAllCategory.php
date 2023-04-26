<?php
/* Les vues sont des fichiers qui contiennent du
code HTML et des echo permettant d’afficher
les variables pré-remplies par le contrôleur */

//$tab_u est un objet ModelUtilisateur donné par le controllerUtilisateur
	foreach ($tab_u as $u){
	  echo " Category Name : ".$u->getNameCategory(); 
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
<div class= 'add'>
	<a href='index.php?controller=utilisateur&action=create'>Add Category</a>
</div>
