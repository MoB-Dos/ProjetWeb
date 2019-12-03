<?php
session_start();
?>

<form method="post" action="Session_1.php">

	Votre nom:
	<input type="text" name="login" required/>

  Votre prenom:
	<input type="text" name="mdp" required/>

	<input type="submit" value="Connexion"/>
  <input type="button" value="Inscription" onclick="window.location.href='Inscription1.php'">


</form>
