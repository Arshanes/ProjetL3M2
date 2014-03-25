<<<<<<< HEAD:vues/Gestion_Pattern_rechercher_pattern.php
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Projet L3/M2 - Gestion pattern_Recherche de pattern</title>
		<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css"/>
		<!--<link rel="stylesheet" type="text/css" href="../asset/css/style.css"/>-->
		<script type="text/javascript" src="../asset/js/calendrier.js"></script>
	</head>
	<body>
		<!-- HEADER-->
		<header class="row-fluid">
			<div class="span12">
				<!--Première section du header-->
				<div class="row-fluid">
					<div class="span3">
						<h1>Projet M2L3</h1>
					</div>
					<!--Bloc Menu -->
					<nav class="span5" id="menu">
						<ul>
							<li><a href="#">Accueil</a></li>
							<li><a href="vues/Gestion_Pattern_rechercher_pattern.png">Gestion des patterns</a></li>
							<li><a href="#">Administration</a></li>
						</ul>
					</nav>
					<!--Bloc login -->
					<div class="span4" id="blocLog">
					    <form class="form-inline">
						    <input type="text" class="input-small" placeholder="Login">
						    <input type="password" class="input-small" placeholder="Password">
						    <button type="submit" class="submit">Connexion</button>
						    <a>Creer un compte</a>
						</form>
					</div>
				</div>
			</div>
		</header>
=======
<!--CONTENU-->
<div class="row-fluid">
	<p class="divCenter">Que souhaitez-vous faire?</p>
	
	<div class="span12">
	
		<label for="rechercher" class="radio inline">Rechercher</label>
			<input type="radio" name="origine" value="rechercher" id="rechercher"/>
>>>>>>> 959e778f9e9d58640ebea6b2bd86ba31556ba82c:vues/Gestion_Pattern_rechercher_pattern.html
		
		<label for="ajouter" class="radio inline" >Ajouter</label>
			<input type="radio" name="origine" value="ajouter" id="ajouter"/>
		

		<fieldset>
			<legend>Recherche</legend>
			<div class="span6">
				<fieldset>
					<legend>Caractéristiques du pattern recherché:</legend>
					<label for="nom" class="">Nom :</label>
						<input type="text" name="nom" class="input-medium"/><br/>
					<label for="date" class="">Date d'ajout :</label>
						<input type="text" name="date" class="calendrier" size="8"/><br/>
					<label for="mots_clé" class="">Mots-clé :</label>
						<input type="text" name="mots_clé" class="input-medium"/><br/>
					<label for="last version" class="radio inline">Last Version Only</label>

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
				</fieldset>
			</div>
	
			<div class="span6">
				<fieldset>
					<legend>Pattern correspondant à la recherche:</legend>
					<input type="radio" id="civ1" />
					<label for="civ1"><abbr title="Madame">M<sup>me</sup></abbr></label>
					<input type="radio" id="civ2" />
					<label for="civ2"><abbr title="Monsieur">M.</abbr></label>
				</fieldset>
			</div>
		</fieldset>
	</div>
</div>
