<?php

try{
$bdd= new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8','root','');
}

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}

$req = $bdd->query('select * from utilisateur');
$donne=$req->fetchall();


echo $donne['nom']." ".$donne['prenom']." ".$donne['mail']." ".$donne['tel']." ".$donne['adresse']." ".$donne['classe']." ".$donne['profil_id'];
