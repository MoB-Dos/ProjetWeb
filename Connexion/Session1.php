<?php
//Démarrage de la session
session_start ();
//Connexion à la base de données projetweb
try{
$bdd= new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8','root','');
}

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}
//Sélection dans la table utilisateur
$reponse=$bdd->query('SELECT * FROM utilisateur');
$donne=$reponse->fetchall();

//Pour chaque donnée
foreach ($donne as $value) {
  //Si les zones login et mdp sont entrées
  if (isset($_POST['login']) && isset($_POST['mdp'])) {
    //Si les données correspondent au données de la base de données
    if ($value['nom'] == $_POST['login'] && $value['mdp'] == md5($_POST['mdp']) && $value['prenom'] == $_POST['prenom']) {
      //On enregistre login et prénom dans la session
      $_SESSION['login'] = $_POST['login'];
      $_SESSION['prenom'] = $_POST['prenom'];
      //Renvoi vers la page Accueil
      header ('location: http://localhost/Projet/GIT/ProjetWeb/Accueil/Accueil.php');
    }
    //Sinon on affiche une boite de dialogue d'alerte
    else {
      echo '<body onLoad="alert(\'Accès refusé\')">';

      echo '<meta http-equiv="refresh" content="0;URL=Connexion.php">';
    }
  }
  //Sinon on demande à remplir les champs vides
  else {
    echo 'Veuillez remplir les champs vides';
  }
}
?>
