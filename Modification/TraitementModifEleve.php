<?php
//Démarrage de la session
session_start ();

//Connexion à la base de données projetweb
try{
$bdd= new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8','root','');
}

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}

//Enregistrement des variables
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mail=$_POST['mail'];
$tel=$_POST['tel'];
$adresse=$_POST['adresse'];
$classe=$_POST['classe'];
$profil_id=$_POST['profil_id'];


//Modification dans la table utilisateur
  $req = $bdd->prepare('UPDATE utilisateur SET nom = ?, prenom = ?, mail = ?, tel = ?, adresse = ?, classe = ?,  profil_id = ? WHERE nom= ? AND prenom = ?');
  $a = $req -> execute(array($nom, $prenom, $mail, $tel, $adresse, $classe, '1', $_SESSION['login'], $_SESSION['prenom']));

  //Renvoi vers la page connexion
  header("location:http://localhost/Projet/GIT/ProjetWeb/TemplateConnexion/ConnexionTem.html");

?>
