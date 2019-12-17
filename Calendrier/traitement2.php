<?php
//Démarrage de la session
session_start();
$reponse=$bdd->query('SELECT COUNT(id) FROM agenda')->fetchColumn();
var_dump($reponse);
/*$annee=$_POST['annee'];
$mois=$_POST['mois'];
$jour=$_POST['jour']-1;
$heures=$_POST['heures'];
$minutes=$_POST['minutes'];
$event=$_POST['event'];
$id=$_POST['id'];
try{
$bdd= new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8','root','');
}

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}
//Sélection des données dans la table agenda

    $req = $bdd->prepare('INSERT INTO agenda (id, annee, mois, jour, heures, minutes, event) VALUES (?,?,?,?,?,?,?)');
    $req -> execute(array($id, $annee, $mois, $jour, $heures, $minutes, $event));
    header("Location: agenda.php");
    exit;
*/
?>
