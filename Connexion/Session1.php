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
$a = md5($_POST['mdp']);

//Sélection dans la table utilisateur
$reponse=$bdd->prepare('SELECT * FROM utilisateur WHERE nom = :nom AND mdp = :mdp');
$reponse->execute(array(
  'nom' => $_POST['login'],
    'mdp' => md5($_POST['mdp'])

));
$donne=$reponse->fetch();

//Pour chaque donnée

  //Si les zones login et mdp sont entrées
  if (isset($_POST['login']) && isset($_POST['mdp'])) {

    //Si les données correspondent au données de la base de données
    if ($donne['nom'] == $_POST['login'] && $donne['mdp'] == md5($_POST['mdp']) && $donne['prenom'] == $_POST['prenom']) {
      //On enregistre login et prénom dans la session

      $_SESSION['login'] = $_POST['login'];
      $_SESSION['prenom'] = $_POST['prenom'];

      if ($donne['profil_id'] == '1') {
        //Renvoi vers la page AccueilEleve
        header ('location: http://localhost/Projet/GIT/ProjetWeb/1pageCo.php');
      }

      if ($donne['profil_id'] == '2') {
        //Renvoi vers la page AccueilEleve
        header ('location: http://localhost/Projet/GIT/ProjetWeb/1pageCo.php');
      }
      if ($donne['profil_id'] == '3') {
        //Renvoi vers la page AccueilEleve
        header ('location: http://localhost/Projet/GIT/ProjetWeb/1pageCoAdmin.php');
      }
}
    //Sinon on affiche une boite de dialogue d'alerte
    else {
      echo '<body onLoad="alert(\'Accès refusé\')">';

      echo '<meta http-equiv="refresh" content="0;URL=http://localhost/Projet/GIT/ProjetWeb/TemplateConnexion/ConnexionTem.html">';
    }
  }
  //Sinon on demande à remplir les champs vides
  else {
    echo 'Veuillez remplir les champs vides';
  }

?>
