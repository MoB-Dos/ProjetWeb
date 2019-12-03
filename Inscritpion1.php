<form method="post" action="Inscription2.php">

	Votre nom:
	<input type="text" name="nom" required/>
	<br><br>

	Votre prenom:
			<input type="text" name="prenom" required/><br><br>


	Votre age:
			<input type="number" name="age" required><br><br>

  Votre metier:
	<select name="metier">
      <?php
			try{
			$bdd= new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8','root','');
			}

			catch(Exception $e){
			  die('Erreur:'.$e->getMessage());
			}

			$reponse=$bdd->query('SELECT metier FROM metiers');
			$donne=$reponse->fetchall();
			foreach ($donne as $value) {
				echo '<option>'.$value['metier'].'</option>';
			}

			?>
		</select><br><br>

	Votre pays:
  <input type="radio" name="pays" value="France" checked>France
  <input type="radio" name="pays" value="Allemagne">Allemagne
  <input type="radio" name="pays" value="Espagne">Espagne
	<input type="radio" name="pays" value="Portugal">Portugal
	<input type="radio" name="pays" value="USA">USA
  <input type="radio" name="pays" value="Angleterre">Angleterre<br><br>


	<input type="button" value="Annuler" onclick="window.location.href='Connexion.php'"/>
	<input type="submit" value="Envoyer"/><br><br>

</form>
