<?php

session_start ();

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

if ($mdp == $mdp2) {
  try{
  $bdd= new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8','root','');
  }

  catch(Exception $e){
    die('Erreur:'.$e->getMessage());
  }

  $req = $bdd->prepare('UPDATE utilisateur SET nom = ?, prenom = ?, mail = ?, tel = ?, adresse = ?, classe = ?  WHERE nom= ? AND prenom = ?');
  $a = $req -> execute(array($nom, $prenom, $mail, $tel, $adresse, $classe, $_SESSION['login'], $_SESSION['prenom']));
  header("location:http://localhost/Projet/GIT/ProjetWeb/Connexion/connexion.php");
}

else {
  echo '<body onLoad="alert(\'Veuillez entrer deux mots de passe identiques\')">';

  echo '<meta http-equiv="refresh" content="0;URL=http://localhost/Projet/GIT/ProjetWeb/Inscription/Inscription1.php">';
}


?>