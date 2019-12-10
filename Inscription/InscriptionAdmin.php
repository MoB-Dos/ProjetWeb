<?php
//Démarrage de la session
session_start();
$lieneleve = "'../Accueil/AccueilEleve.php'";
$lienparent = "'../Accueil/AccueilEleve.php'";
$lienadmin = "'../Accueil/AccueilEleve.php'";
?>
<!-- Formulaire d'incription -->
<form method="post" action="Traitement.php">

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
<?php
if ($donnee['profil_id']=='1'){
	echo '<br><br><input type="button" value="Retour" onclick="window.location.href='.$lieneleve.'"/>';
}

if ($donnee['profil_id']=='2'){
	echo '<br><br><input type="button" value="Retour" onclick="window.location.href='.$lienparent.'"/>';
}

if ($donnee['profil_id']=='3'){
	echo '<br><br><input type="button" value="Retour" onclick="window.location.href='.$lienadmin.'"/>';
}
	?>
	<input type="submit" value="Envoyer"/><br><br>

</form>
