<?php

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$age=$_POST['age'];
$metier=$_POST['metier'];
$pays=$_POST['pays'];

try{
$bdd= new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8','root','');
}

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}

$req = $bdd->prepare('insert into utilisateur (nom, prenom, age, metier, pays) value(?,?,?,?,?)');
$req -> execute(array($nom, $prenom, $age, $metier, $pays));
header("location:Connexion.php");
?>
