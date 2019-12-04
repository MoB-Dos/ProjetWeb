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

try{
$bdd= new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8','root','');
}

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}

$reponse=$bdd->prepare('SELECT * FROM utilisateur WHERE nom=? AND prenom=? OR mail=?');
$reponse->execute(array($nom, $prenom,$mail));
$donne=$reponse->fetchall();

if ($donne) {
  echo '<body onLoad="alert(\'Utilisateur déjà existant\')">';

  echo '<meta http-equiv="refresh" content="0;URL=Inscription1.php">';
}

else {
  if ($mdp == $mdp2) {
    $req = $bdd->prepare('INSERT INTO utilisateur (nom, prenom, mail, tel, adresse, classe, profil_id, mdp) VALUES (?,?,?,?,?,?,?,?)');
    $req -> execute(array($nom, $prenom, $mail, $tel, $adresse, $classe, $profil_id, $mdp));
    header("location:Connexion.php");
  }

  else {
    echo '<body onLoad="alert(\'Veuillez entrer deux mots de passe identiques\')">';

    echo '<meta http-equiv="refresh" content="0;URL=Inscription1.php">';
  }
}

?>
