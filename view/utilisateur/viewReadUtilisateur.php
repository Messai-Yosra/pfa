 <?php
	$ncin=$u->getNcin();
	echo '<p>NCIN Utilisateur : '.$ncin;
	echo '<br/>Nom : '.$u->getNom().' - Prenom : '.$u->getPrenom().'</p>';
	echo '<div class= updt><a href="index.php?controller=utilisateur&action=update&ncin='.$ncin.'">
	 Modifier </a></div>';
	echo '<div class= supp><a href="index.php?controller=utilisateur&action=delete&ncin='.$ncin.'">
	 Supprimer </a></div> ';
?>


