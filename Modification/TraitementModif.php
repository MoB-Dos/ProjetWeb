<?php
//Démarrage de la session
session_start ();

//Enregistrement des variables
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mail=$_POST['mail'];
$tel=$_POST['tel'];
$adresse=$_POST['adresse'];
$classe=$_POST['classe'];
$profil_id=$_POST['profil_id'];
$mdp=md5($_POST['mdp']);
$mdp2=md5($_POST['mdp2']);

if ($profil_id=='etudiant') {
  $profil_id='1';
}
elseif ($profil_id=='parent') {
  $profil_id='2';
}

//Modification dans la table utilisateur
  $req = $bdd->prepare('UPDATE utilisateur SET nom = ?, prenom = ?, mail = ?, tel = ?, adresse = ?, classe = ?  WHERE nom= ? AND prenom = ?');
  $a = $req -> execute(array($nom, $prenom, $mail, $tel, $adresse, $classe, $_SESSION['login'], $_SESSION['prenom']));

  //Renvoi vers la page connexion
  header("location:http://localhost/Projet/GIT/ProjetWeb/Connexion/connexion.php");

?>
