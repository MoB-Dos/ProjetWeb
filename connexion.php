<?php
session_start();
?>

<form method="post" action="Session1.php">

	Votre nom:
	<input type="text" name="login" required/>

  Votre mot de passe:
	<input type="password" name="mdp" required/>

	<input type="submit" value="Connexion"/>
  <input type="button" value="Annuler" onclick="window.location.href='Accueil.php'">


</form>
