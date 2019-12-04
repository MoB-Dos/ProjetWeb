<?php
session_start ();

try{
$bdd= new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8','root','');
}

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}

$reponse=$bdd->query('SELECT * FROM utilisateur');
$donne=$reponse->fetchall();


foreach ($donne as $value) {

  if (isset($_POST['login']) && isset($_POST['mdp'])) {

    if ($value['nom'] == $_POST['login'] && $value['mdp'] == md5($_POST['mdp']) && $value['prenom'] == $_POST['prenom']) {

      $_SESSION['login'] = $_POST['login'];
      $_SESSION['prenom'] = $_POST['prenom'];

      header ('location: http://localhost/Projet/GIT/ProjetWeb/Accueil/Accueil2.php');
    }
    else {
      echo '<body onLoad="alert(\'Accès refusé\')">';

      echo '<meta http-equiv="refresh" content="0;URL=Connexion.php">';
    }
  }
  else {
    echo 'Veuillez remplir les champs vides';
  }
}
?>
