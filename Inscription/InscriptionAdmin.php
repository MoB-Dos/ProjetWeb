<?php
//Démarrage de la session
session_start();
?>
<!-- Formulaire d'incription -->
<form method="post" action="TraitementAdmin.php">

	Votre nom:
	<input type="text" name="nom" required/>
	<br><br>

	Votre prenom:
			<input type="text" name="prenom" required/><br><br>


	Votre mail:
			<input type="text" name="mail" required><br><br>

  Votre numéro:
	<input type="tel" name="tel" maxlength="10" minlength="10"><br><br>

	Votre adresse:
	<input type="text" name="adresse"><br><br>

Votre profil: Administrateur<br><br>

Votre mot de passe:
<input type="password" name="mdp" required><br><br>

Retapez votre mot de passe:
<input type="password" name="mdp2" required><br><br>

<!--Boutons de validation et de retour-->
	<input type="button" value="Retour" onclick="window.location.href='../Accueil/AccueilAdmine.php'"/>
	<input type="submit" value="Envoyer"/><br><br>

</form>
