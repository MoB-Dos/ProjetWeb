<?php
session_start();
try{
$bdd= new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8','root','');
}

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}

$req = $bdd->prepare('select * from utilisateur where nom = :nom && mdp = :mdp');
$req->execute(array('nom' => $_SESSION['login'],
'mdp' => $_SESSION['mdp']));
$donne=$req->fetchall();
var_dump($donne);
foreach ($donne as $value) {
echo $donne['nom']." ".$donne['prenom']." ".$donne['mail']." ".$donne['tel']." ".$donne['adresse']." ".$donne['classe']." ".$donne['profil_id'];
}
?>
