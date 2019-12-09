<?php
session_start();
try{
$bdd= new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8','root','');
}

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}

$req=$bdd->prepare('SELECT * FROM utilisateur WHERE nom= ? AND prenom=?');
$req->execute(array( $_SESSION['login'],  $_SESSION['prenom']));
$donnee = $req->fetch();

?>

<form method="post" action="modification2.php">

	Votre nom:
	<input type="text" name="nom" value=<?php echo $_SESSION['login'];?> required/>
	<br><br>

	Votre prenom:
			<input type="text" name="prenom" value=<?php echo $_SESSION['prenom'];?> required/><br><br>


	Votre mail:
			<input type="text" name="mail" value=<?php echo $donnee['mail'];?>><br><br>

  Votre numéro:
	<input type="tel" name="tel" maxlength="10" minlength="10" value=<?php echo $donnee['tel'];?>><br><br>

	Votre adresse:
	<input type="text" name="adresse" value='<?php echo $donnee['adresse'];?>'><br><br>

	Votre classe:
  <input type="text" name="classe" value=<?php echo $donnee['classe'];?>><br><br>

Votre profil:
	<select name="profil_id">
			<option>etudiant</option>;
			<option>parent</option>;
	</select><br><br>

	<input type="button" value="Annuler" onclick="window.location.href='http://localhost/Projet/GIT/ProjetWeb/Accueil.php'"/>
	<input type="submit" value="Envoyer"/>

</form>
