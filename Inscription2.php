<?php

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mail=$_POST['mail'];
$tel=$_POST['tel'];
$adresse=$_POST['adresse'];
$classe=$_POST['classe'];
$profil_id=$_POST['profil_id'];
$mdp=md5($_POST['mdp']);

if ($profil_id=='etudiant') {
  $profil_id='1';
}
elseif ($profil_id=='parent') {
  $profil_id='2';
}

try{
$bdd= new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8','root','');
}

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}

$req = $bdd->prepare('insert into utilisateur (nom, prenom, mail, tel, adresse, classe, profil_id, mdp) values(?,?,?,?,?,?,?,?)');
$req -> execute(array($nom, $prenom, $mail, $tel, $adresse, $classe, $profil_id, $mdp));
header("location:Connexion.php");
?>
