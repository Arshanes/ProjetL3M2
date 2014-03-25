	<div class="contenu-block">
		<h2 class="headerBox">Formulaire d'inscription à compléter</h2>
		<p><strong>Tous les champs précédés de <span class="red bold">* </span> sont obligatoires.</strong></p>
		<form class="formulaire" method="get" action="index.php">
			<fieldset>
				<legend>Informations de connexion:</legend>

				<label for="mail" class="labelInput"><span class="red bold">* </span> Email :</label>
				<input type="text" name="mail" id="mail" class="input-large"/><br/>
								
				<label for="confirmation_mail" class="labelInput"><span class="red bold">* </span> Confirmation Email :</label>
				<input type="text" name="confirmation_mail" id="confirmation_mail" class="input-large"/><br/>
				
				<label for="mdp" class="labelInput"><span class="red bold">* </span> Mot de passe :</label>
				<input type="text" name="mdp" id="mdp" class="input-large"/><br/>
				
				<label for="confirmation_mdp" class="labelInput"><span class="red bold">* </span> Confirmation Mot de passe :</label>
				<input type="text" name="confirmation_mdp" id="confirmation_mdp" class="input-large"/><br/>
			</fieldset>
			<fieldset>	
				<legend>Informations personnelles:</legend>
				<label for="nom" class="labelInput"><span class="red bold">* </span> Nom :</label>
				<input type="text" name="nom" id="nom" class="input-large"/><br/>
				
				<label for="prenom" class="labelInput"><span class="red bold">* </span> Prénom :</label>
				<input type="text" name="prenom" id="prenom" class="input-large"/><br/>

				<label for="adresse" class="labelInput"><span class="red bold">* </span> Adresse :</label>
				<input type="text" name="adresse" id="adresse" class="input-large"/><br/>
				
				<label for="cp" class="labelInput"><span class="red bold">* </span> Code postal :</label>
				<input type="text" name="cp" id="cp" class="input-large"/><br/>
				
				<label for="ville" class="labelInput"><span class="red bold">* </span> Ville :</label>
				<input type="text" name="ville" id="ville"class="input-large"/><br/>
				
				<label for="tel" class="labelInput"><span class="red bold">* </span> Téléphone :</label>
				<input type="text" name="tel" id="tel" class="input-large"/><br/>
			</fieldset>
				<div class="divCenter">
					<button class="submit">S'inscrire </button>
					<button class="btn btn-inverse reset" type="reset" >Effacer </button>
				</div>
		</form>
	</div>