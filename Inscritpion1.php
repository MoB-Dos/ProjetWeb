<form method="post" action="Inscription2.php">

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
      <?php
			try{
			$bdd= new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8','root','');
			}

			catch(Exception $e){
			  die('Erreur:'.$e->getMessage());
			}

			$reponse=$bdd->query('SELECT nom_profil FROM profil');
			$donne=$reponse->fetchall();
			foreach ($donne as $value) {
				echo '<option>'.$value['nom_profil'].'</option>';
			}

			?>
		</select><br><br>

Votre mot de passe:
<input type="password" name="mdp" required><br><br>

	<input type="button" value="Annuler" onclick="window.location.href='Connexion.php'"/>
	<input type="submit" value="Envoyer"/><br><br>

</form>
