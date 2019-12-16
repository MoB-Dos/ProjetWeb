<?php
//Démarrage de la session
session_start();

$annee=$_POST['annee'];
$mois=$_POST['mois']+1;
$jour=$_POST['jour'];
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
$vrai_id=$vrai_id+1;
var_dump($vrai_id);
for ($id=0; $id<$vrai_id; $id++){
  $reponse=$bdd->query('SELECT * FROM agenda WHERE id=$id');
  $donne=$reponse->fetch();
  if(isset($donne['annee'])){
    $req = $bdd->prepare('INSERT INTO agenda (id, annee, mois, jour, heures, minutes, event) VALUES (?,?,?,?,?,?,?)');
    $req -> execute(array($id, $annee, $mois, $jour, $heures, $minutes, $event));
    header("Location: agenda.php");
    exit;
  }

if ($id<$vrai_id){
  $req = $bdd->prepare('INSERT INTO agenda (id, annee, mois, jour, heures, minutes, event) VALUES (?,?,?,?,?,?,?)');
  $req -> execute(array($id, $annee, $mois, $jour, $heures, $minutes, $event));
  header("Location: agenda.php");
}
else {
  echo 'erreur 404';
}
}
?>
