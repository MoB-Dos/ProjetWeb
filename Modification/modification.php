<?php
session_start();
?>

<form method="post" action="modification2.php">

	Votre nom:
	<input type="text" name="nom" required/>
	<br><br>

	Votre prenom:
			<input type="text" name="prenom" required/><br><br>


	Votre mail:
			<input type="text" name="mail" required><br><br>

  Votre numéro:
	<input type="number" name="tel"><br><br>

	Votre adresse:
	<input type="text" name="adresse"><br><br>

	Votre classe:
  <input type="text" name="classe"><br><br>

Votre profil:
	<select name="profil_id">
			<option>etudiant</option>;
			<option>parent</option>;
	</select><br><br>

Votre mot de passe:
<input type="password" name="mdp" required><br><br>

Retapez votre mot de passe:
<input type="password" name="mdp2" required><br><br>

	<input type="button" value="Annuler" onclick="window.location.href='http://localhost/Projet/GIT/ProjetWeb/Accueil.php'"/>
	<input type="submit" value="Envoyer"/><br><br>

</form>
