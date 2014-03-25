<!--CONTENU-->
		<div class="contenu-blockLarge">
			<h2 class="headerBox">Que souhaitez-vous faire?</h2>
			<form>
				<input type="radio" name="origine" value="rechercher" id="rechercher"/>
				<label for="rechercher">Rechercher</label>
				
				<input type="radio" name="origine" value="ajouter" id="ajouter"/>
				<label for="ajouter">Ajouter</label>
			</form>
			<h3>Ajouter : </h3>
			<div class="leftSideDiv">
				<form>
					<input type="radio" name="origine" value="pattern" id="pattern" checked />
					<label for="rechercher">Pattern</label>
				
					<input type="radio" name="origine" value="relation" id="relation"/>
					<label for="ajouter">Relation</label>
				</form>
				<form class="searchPattern">
					<fieldset>
						<legend>Ajouter un pattern :</legend>
						<label for="apercu" class="labelInput">Nom :</label>
							<input type="text" name="apercu" class="input-large"/><br/>
						<label for="date" class="labelInput">Date d'ajout :</label>
							<input type="text" name="date" placeholder="jj/mm/aaaa" class="calendrier input-large" size="8"/><br/>
						<label for="mots_clé" class="labelInput">Mots-clé :</label>
							<input type="text" name="mots_clé" class="input-large"/><br/>

						<label for="classification_type"></label><br />
							<select name="classification_type" id="classification_type">
									<option value="">Classification Type</option>
									<option value="">ta Soeur</option>
									<option value="">ta Maman</option>
									<option value="">ta Grand-Maman</option>
							</select>
						
						<label for="pattern_type"></label><br />
							<select name="pattern_type" id="pattern_type">
									<option value="">Pattern Def Type</option>
									<option value="">ta Soeur2</option>
									<option value="">ta Maman2</option>
									<option value="">ta Grand-Maman2</option>
							</select>
						<div class="divCenter">
							<button class="submit" type="button"/>Rechercher</button>
						</div>
					</fieldset>
				</form>
			</div>

			<div class="rightSideDiv searchPattern">
				<fieldset>
					<legend>Pattern correspondant à la recherche:</legend>
					<p>Lorem ipsum et j'connais pas la suite...
				</fieldset>
			</div>
		</div>