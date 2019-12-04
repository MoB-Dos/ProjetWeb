<?php

try{
$bdd= new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8','root','');
}

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}

$req = $bdd->prepare('UPDATE utilisateur SET nom= ? WHERE nom= ?');
var_dump($req);
$req -> execute(array($_POST['nom2'], $_POST['nom']));
//header("location:http://localhost/Projet/GIT/ProjetWeb/Accueil/Accueil2.php");
//}
?>
