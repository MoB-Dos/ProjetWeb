<?php
session_start();
?>

<form method="post" action="modiftest2.php">

	Votre nom:
	<input type="text" name="nom" required/>
	<br><br>

  Votre nouveau nom:
  <input type="text" name="nom2" required/>
  <br><br>

<input type="submit" value="Envoyer"/>
