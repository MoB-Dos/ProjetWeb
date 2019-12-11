<!DOCTYPE html>
<html lang="en">
<head>
	<title>Inscription</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/Fond/1.jpg');">
			<div class="wrap-login100 p-t-50 p-b-90">

				<form class="login100-form validate-form flex-sb flex-w" method="post" action="../Inscription/Traitement.php">
					<span class="login100-form-title p-b-51">
						Inscription
					</span>

					<!--Nom===============================================================================================-->
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Le Nom est necessaire">
						<input class="input100" type="text" name="nom" placeholder="Nom">
						<span class="focus-input100"></span>
					</div>
					<!--===============================================================================================-->

					<!--Prenom===============================================================================================-->
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Le Prenom est necessaire">
						<input class="input100" type="text" name="prenom" placeholder="Prenom">
						<span class="focus-input100"></span>
					</div>
					<!--===============================================================================================-->

					<!--Mail===============================================================================================-->
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Le Mail est necessaire">
						<input class="input100" type="mail" name="mail" placeholder="Mail">
						<span class="focus-input100"></span>
					</div>
					<!--===============================================================================================-->

					<!--Numéro===============================================================================================-->
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Le Numero est necessaire">
						<input class="input100" type="tel" name="tel" maxlength="10" minlength="10" placeholder="Numero">
						<span class="focus-input100"></span>
					</div>
					<!--===============================================================================================-->

					<!--Adresse===============================================================================================-->
					<div class="wrap-input100 validate-input m-b-16" data-validate = "L'Adresse est necessaire">
						<input class="input100" type="text" name="adresse" placeholder="Adresse">
						<span class="focus-input100"></span>
					</div>
					<!--===============================================================================================-->


					<!--MDP================================================================================================-->
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Le mot de passe est necessaire">
						<input class="input100" type="password" name="mdp" placeholder="Mot de passe">
						<span class="focus-input100"></span>
					</div>
					<!--===============================================================================================-->

					<!--MDP2===============================================================================================-->
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Vous devez retaper le Mot de passe">
						<input class="input100" type="password" name="mdp2" placeholder="Ressaisir le mot de passe">
						<span class="focus-input100"></span>
					</div>
					<!--===============================================================================================-->

					<!--Classe===============================================================================================-->
					<div class="wrap-input100 validate-input m-b-16" style="background-color:white;margin-bottom: -30px;">
						<select name="classe" class="input100" style="border : none;background-color: #e6e6e6;">
							<option value="0" selected disabled style="color: #bbbbbb;">choissisez votre Classe !</option>
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
					<span class="focus-input100"></span>
					</div>
					<!--====================================================================================================-->

					<!--profil===============================================================================================-->

					<div class="wrap-input100 validate-input m-b-16" style="background-color:white;margin-bottom: -10px;">
						<select name="profil_id" class="input100" style="border : none;background-color: #e6e6e6;" placeholder="Adresse">
								<option value="0" selected disabled style="color: #bbbbbb;">choissisez votre Profil !</option>
								<option value="1" style="color: #403866;">Etudiant</option>;
								<option value="2" style="color: #403866;">Parent</option>;
						</select><br><br>
						<span class="focus-input100"></span>
					</div>

					<!--====================================================================================================-->

					<!--Submit===============================================================================================-->
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Inscription
						</button>
					</div>
					<!--===============================================================================================-->

					</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
