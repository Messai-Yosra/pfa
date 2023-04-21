<?php
$immatriculation=$oldVoiture->getImmatriculation();
?>
<form method="POST" action="index.php?controller=voiture&action=updated&immatriculation=<?=$immatriculation?>">
  <fieldset>
     <legend>Modification d'une voiture </legend> 
	 <p>
		 <label for="immatriculation">Immatriculation</label> :
		 <input type="text" value= "<?=$immatriculation?>" name="immatriculation" id="immatriculation" required readonly/>
	 </p> 
	 <p>
		<label for="marque">Marque</label> :
		<input type="text" value= "<?=$oldVoiture->getMarque()?>" name="marque" id="marque" required/>
	</p>
	<p>
		<label for="couleur">Couleur</label> :
		<input type="text" value= "<?=$oldVoiture->getCouleur()?>" name="couleur" id="couleur" required/>
	</p>
	<p>
		<label for="proprietaire">Proprietaire</label> :
		<select name="proprietaire_ncin">
		<?php
		foreach($tab_utilisateurs as $utilisateur){
		$ncin=$utilisateur->getNcin();
		$nom=$utilisateur->getNom();
		$prenom=$utilisateur->getPrenom();
		echo "<option value=$ncin->$ncin $nom $prenom</option>";
		}
		?>
		</select>
	</p>
	<p>
		<input type="submit" value="Envoyer" />
	</p>
	</fieldset>
</form>