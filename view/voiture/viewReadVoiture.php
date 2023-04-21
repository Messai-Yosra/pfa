 <?php
	$immatriculation=$voiture->getImmatriculation();
	echo '<p>Immatriculation voiture : '.$immatriculation;
	echo '<br/>Marque : '.$voiture->getMarque().' - Couleur : '.$voiture->getCouleur().' - Ncin Proprietaire : '.$voiture->getProprietaire_ncin().'</p>';
	echo '<div class= updt><a href="index.php?controller=voiture&action=update&immatriculation='.$immatriculation.'">
	 Modifier </a></div>';
	echo '<div class= supp><a href="index.php?controller=voiture&action=delete&immatriculation='.$immatriculation.'">
	 Supprimer </a></div> ';
?>


