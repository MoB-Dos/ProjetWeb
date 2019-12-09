<?php
session_start();
echo "Bonjour"." ".$_SESSION['login']." ".$_SESSION['prenom'] ?><br>
<input type="button" value="se déconecter" onclick="window.location.href='Accueil.php'">
<input type="button" value="modifier" onclick="window.location.href='http://localhost/Projet/GIT/ProjetWeb/Modification/modification.php'">
<input type="button" value="Afficher les données" onclick="window.location.href='http://localhost/Projet/GIT/ProjetWeb/Affichage/afficher.php'">
