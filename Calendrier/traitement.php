<?php
//Démarrage de la session
session_start();

$annee=$_POST['annee'];
$mois=$_POST['mois'];
$jour=$_POST['jour']-1;
$heures=$_POST['heures'];
$minutes=$_POST['minutes'];
$event=$_POST['event'];

try{
$bdd= new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8','root','');
}

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}
//Sélection des données dans la table agenda
$reponse=$bdd->query('SELECT id FROM agenda');
$donne=$reponse->fetch();
$vrai_id=$reponse->columnCount();
$id=$vrai_id+1;
var_dump($vrai_id);
  $donne=$reponse->fetch();
  var_dump($donne);
    $req = $bdd->prepare('INSERT INTO agenda (annee, mois, jour, heures, minutes, event) VALUES (?,?,?,?,?,?)');
    $req -> execute(array($annee, $mois, $jour, $heures, $minutes, $event));
    header("Location: agenda.php");
?>
