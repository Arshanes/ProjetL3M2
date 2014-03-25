<!--CONTENU-->
		<div class="contenu-blockLarge">
			<h2 class="headerBox">Que souhaitez-vous faire?</h2>
			
			<input type="radio" name="origine" value="rechercher" id="rechercher"/>
			<label for="rechercher">Rechercher</label>
			
			<input type="radio" name="origine" value="ajouter" id="ajouter"/>
			<label for="ajouter">Ajouter</label>
			
			<h3>Rechercher: </h3>
			<div class="leftSideDiv">
				<input type="radio" name="origine" value="pattern" id="pattern"/>
				<label for="rechercher">Pattern</label>
				
				<input type="radio" name="origine" value="relation" id="relation"/>
				<label for="ajouter">Relation</label>
				<form>
					<fieldset>
						<legend>Rechercher une relation:</legend>
						<label for="cible" class="labelInput">Cible :</label>
							<input type="text" name="cible" class="input-large"/><br/>
						<label for="source" class="labelInput">Source :</label>
							<input type="text" name="source" class="input-large"/><br/>
						<label for="type_relation" class="labelInput">Type de relation :</label>
							<input type="text" name="type_relation" class="input-large"/><br/>
						<div class="divCenter">
							<button class="submit" type="button"/>Rechercher</button>
						</div>

						
						<div class="divCenter">
							<button class="submit" type="button"/>Rechercher</button>
						</div>
					</fieldset>
				</form>
			</div>

			<div class="rightSideDiv">
				<fieldset>
					<legend>Résultats de la recherche :</legend>
						<button class="submit" type="button"/>Modifier</button>
						<button class="submit" type="button"/>Supprimer</button>
				</fieldset>
			</div>
		</div>