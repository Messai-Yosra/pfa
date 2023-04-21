<form method="POST" action="index.php?controller=utilisateur&action=created">
  <fieldset>
     <legend>Ajout d'un utilisateur </legend> 
	 <p>
     <label for="ncin">NCIN</label> :
     <input type="text"  name="ncin"  id="ncin" maxlength="8" required/>
     </p> 
	 <p>
		 <label for="n">Nom</label> :
		 <input type="text"  name="n" id="n"  required/>
	  </p> 
	 <p>
     <label for="p">Prenom</label> :
     <input type="text" name="p" id="p"  required/>
     </p> 
	 <p>
     <input type="submit" value="Envoyer" /> 
	 </p>
   </fieldset> 
</form>
