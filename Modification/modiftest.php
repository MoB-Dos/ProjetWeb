<?php

try{
$bdd= new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8','root','');
}

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}

$req = $bdd->query('UPDATE utilisateur SET nom= "Homura" WHERE nom= "Birba"');
/*$req -> execute(array($nom, $prenom, $mail, $tel, $adresse, $classe, $profil_id, $mdp, $_SESSION['login'], $_SESSION['prenom']));
header("location:http://localhost/Projet/GIT/ProjetWeb/Accueil/Accueil2.php");
}*/
?>
