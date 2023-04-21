<?php
?>
<form method="post" action="index.php?controller=voiture&action=created">
<fieldset>
<legend>Création d'une nouvelle voiture</legend>
<p>
<label for="immatriculation">Immatriculation</label> :
<input type="text" placeholder="Ex : 12358TU569" name="immatriculation"
id="immatriculation" required/>
</p>
<p>
<label for="marque">Marque</label> :
<input type="text" placeholder="Renault" name="marque" id="marque" required/>
</p>
<p>
<label for="couleur">Couleur</label> :
<input type="text" placeholder="Jaune" name="couleur" id="couleur" required/>
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