<?php
session_start();
?>

<form method="post" action="Inscription2.php">

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

	Votre classe:
	<select name="classe">
	<?php
	try{
	$bdd= new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8','root','');
	}

	catch(Exception $e){
		die('Erreur:'.$e->getMessage());
	}

	$reponse=$bdd->query('SELECT classe FROM classe');
	$donne=$reponse->fetchall();
	foreach ($donne as $value) {
		echo '<option>'.$value['classe'].'</option>';
	}

	?>
</select><br><br>
Votre profil:
	<select name="profil_id">
			<option>etudiant</option>;
			<option>parent</option>;
	</select><br><br>

Votre mot de passe:
<input type="password" name="mdp" required><br><br>

Retapez votre mot de passe:
<input type="password" name="mdp2" required><br><br>

	<input type="button" value="Annuler" onclick="window.location.href='http://localhost/Projet/GIT/ProjetWeb/Accueil/Accueil.php'"/>
	<input type="submit" value="Envoyer"/><br><br>

</form>