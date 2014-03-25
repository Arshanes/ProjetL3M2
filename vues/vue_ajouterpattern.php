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
						<label for="apercu" class="labelInput">(Apercu) :</label>
							<input type="text" name="apercu" class="input-large"/><br/>
							<button class="submit" type="button"/>Parcourir</button>
						<label for="nom_pattern" class="labelInput">Nom du pattern :</label>
							<input type="text" name="nom_pattern" class="input-large"/><br/>
						<label for="mots_clé" class="labelInput">Mots-clé :</label>
							<input type="text" name="mots_clé" class="input-large"/><br/>

						<label for="classification_type"></label><br />
							<select name="classification_type" id="classification_type">
									<option value="">Classification Type</option>
									<option value="">je</option>
									<option value="">tu</option>
									<option value="">il</option>
							</select>
						
						<label for="pattern_type"></label><br />
							<select name="pattern_type" id="pattern_type">
									<option value="">Pattern Def Type</option>
									<option value="">nous</option>
									<option value="">vous</option>
									<option value="">ils</option>
							</select>
						<div class="divCenter">
							<button class="submit" type="button"/>Ajouter</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>