		<!-- HEADER-->
		<header class="row-fluid">
			<div class="span12">
				<!--Première section du header-->
				<div class="row-fluid">
					<div id="nameSite">
						<h1>Projet M2L3</h1>
					</div>
					<!--Bloc Menu -->
					<nav>
						<ul>
							<li><a href="index.php">Accueil</a></li>
							<li><a href="gestionPattern.php">Gestion des patterns</a></li>
							<li><a href="#">Administration</a></li>
						</ul>
					</nav>
					<!--Bloc login -->
					<div id="blocLog">
					    <form class="form-inline">
						    <input type="text" name="login" class="input-small" placeholder="Login"/>
						    <input type="password" name="password" class="input-small" placeholder="Password"/>
							<select name="choix_repository" id="choix_repository">
									<option value="">Repository</option>
									<option value="">...</option>
									<option value="">.....</option>
									<option value="">.......</option>
							</select>
						    <button type="submit" class="submit">Connexion</button>
						</form>
					</div>
				</div>
			</div>
		</header>