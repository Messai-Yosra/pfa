<?php
	foreach ($tab_v as $voiture){
	  echo "<p> Marque : ".$voiture->getMarque();
	  echo " Couleur : ".$voiture->getCouleur();
	  $ncin=$voiture->getProprietaire_ncin();
	  echo " Proprietaire : 
	  <a href='index.php?controller=utilisateur&action=read&ncin=$ncin'>$ncin</a>";

	  $immatriculation=$voiture->getImmatriculation();
	  echo " Immatriculation : 
	  <a href='index.php?controller=voiture&action=read&immatriculation=$immatriculation'>$immatriculation</a></p>";
	
	echo "<div class= 'updt'>
 		<a href='index.php?controller=voiture&action=update&immatriculation=$immatriculation'> Modifier </a>
 	</div>
 	<div class= 'supp'>
 		<a href='index.php?controller=voiture&action=delete&immatriculation=$immatriculation'> Supprimer </a>
 	</div><hr/>";
	}
?>
<div class= 'add'>
	<a href='index.php?controller=voiture&action=create'>Ajouter une nouvelle voiture</a>
</div>
