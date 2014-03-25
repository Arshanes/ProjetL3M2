<!--CONTENU-->
		<div class="contenu-blockLarge">
			<h2 class="headerBox">User Management</h2>
			<form>
				<fieldset>
						<legend>Create User</legend>
						<label for="login" class="labelInput">Login :</label>
							<input type="text" name="login" class="input-large"/><br/>
						<label for="password" class="labelInput">Password :</label>
							<input type="text" name="password" class="input-large"/><br/>
						<div class="divCenter">
							<button class="submit" type="button"/>Create</button>
						</div>
				</fieldset>
			</form>
			<div class="leftSideDiv">
				<form class="searchPattern">
					<fieldset>
						<legend>Repository Rights</legend>
						<label for="select_repository"></label><br/>
							<select name="select_repository" id="classification_type" class="selectMargin">
									<option value="">Select a Repository</option>
									<option value="">Exemple 1</option>
									<option value="">Exemple 2</option>
									<option value="">Exemple 3</option>
							</select>
						
						<label for="select_user"></label><br/>
							<select name="select_user" id="pattern_type" class="selectMargin">
									<option value="">Select a User</option>
									<option value="">Exemple 1</option>
									<option value="">Exemple 2</option>
									<option value="">Exemple 3</option>
							</select>
						<div class="divCenter">
							<button class="submit" type="button"/>Add Right</button>
							<button class="submit" type="button"/>Delete Right</button>
						</div>
					</fieldset>
				</form>
			</div>

			<div class="rightSideDiv searchPattern">
				<fieldset>
					<legend>Modify User</legend>
					<label for="select_user"></label><br/>
						<select name="select_user" id="pattern_type">
							<option value="">Select a User</option>
							<option value="">User 1</option>
							<option value="">User 2</option>
							<option value="">User 3</option>
						</select>
						
						<button class="submit" type="button"/>Delete User</button>
						
						<label for="login" class="labelInput">Login :</label>
							<input type="text" name="login" class="input-large"/><br/>
						<label for="password" class="labelInput">Password :</label>
							<input type="text" name="password" class="input-large"/><br/>
						<div class="divCenter">
							<button class="submit" type="button"/>Modify</button>
						</div>
				</fieldset>
			</div>
		</div>