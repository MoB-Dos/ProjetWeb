<?php
//Démarrage de la session
session_start();
//Affichage du texte et des boutons
echo "Bonjour"." ".$_SESSION['login']." ".$_SESSION['prenom'] ?><br>
<input type="button" value="Se déconnecter" onclick="window.location.href='http://localhost/Projet/GIT/ProjetWeb/TemplateConnexion/ConnexionTem.html'">
<input type="button" value="Modifier vos données" onclick="window.location.href='http://localhost/Projet/GIT/ProjetWeb/Modification/modification.php'">
<input type="button" value="Afficher vos données" onclick="window.location.href='http://localhost/Projet/GIT/ProjetWeb/Affichage/afficher.php'">
