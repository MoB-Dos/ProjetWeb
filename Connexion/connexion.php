<?php
//Démarrage de la sessions
session_start();
?>
<!--Formulaire de connexion -->
<form method="post" action="Session1.php">

	Votre nom:
	<input type="text" name="login" required/>

	Votre prénom:
	<input type="text" name="prenom" required/>

  Votre mot de passe:
	<input type="password" name="mdp" required/>

<!--Boutons de validation et de retour -->
	<input type="submit" value="Connexion"/>
  <input type="button" value="Annuler" onclick="window.location.href='http://localhost/Projet/GIT/ProjetWeb/Accueil/Accueil.php'">


</form>
