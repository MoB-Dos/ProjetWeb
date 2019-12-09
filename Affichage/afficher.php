<?php
session_start();
try{
$bdd= new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8','root','');
}

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}

$req = $bdd->prepare('select * from utilisateur where nom = :nom and prenom = :prenom');
$req->execute(array('nom' => $_SESSION['login'],
'prenom' => $_SESSION['prenom']));
$donne=$req->fetchall();
foreach ($donne as $value) {
  if($value['profil_id'] == '1'){
    echo $value['nom']." ".$value['prenom']." ".$value['mail']." ".$value['tel']." ".$value['adresse']." ".$value['classe']." "."étudiant";
  }
  if($value['profil_id'] == '2'){
    echo $value['nom']." ".$value['prenom']." ".$value['mail']." ".$value['tel']." ".$value['adresse']." ".$value['classe']." "."parent";
  }
  if($value['profil_id'] == '3'){
    echo $value['nom']." ".$value['prenom']." ".$value['mail']." ".$value['tel']." ".$value['adresse']." ".$value['classe']." "."admin";
  }
}
?>
<br><br><input type="button" value="Retour" onclick="window.location.href='http://localhost/Projet/GIT/ProjetWeb/Accueil/Accueil.php'"/>
