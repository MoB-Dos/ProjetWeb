<?php
//Demarrage de la session
session_start();
$lieneleve = "'../Accueil/AccueilEleve.php'";
$lienparent = "'../Accueil/AccueilParent.php'";
$lienadmin = "'../Accueil/AccueilAdmin.php'";
//Connexion à la base de donnees projetweb
try{
$bdd= new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8','root','');
}

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}
//Commande sql pour selectionner dans la table utilisateur
$req = $bdd->prepare('SELECT * FROM utilisateur WHERE nom = :nom and prenom = :prenom');
$req->execute(array('nom' => $_SESSION['login'],
'prenom' => $_SESSION['prenom']));
$donne=$req->fetchall();
//Affichage de chacune des donnees selon le profil_id
foreach ($donne as $value) {
  if($value['profil_id'] == '1'){
    echo $value['nom']." ".$value['prenom'].'<br><br>'."Mail :"." ".$value['mail'].'<br><br>'."Telephone :"." ".$value['tel'].'<br><br>'."Adresse :"." ".$value['adresse'].'<br><br>'."Etudiant en :"." ".$value['classe'];
    //Bouton de retour
    echo '<br><br><input type="button" value="Retour" onclick="window.location.href='.$lieneleve.'"/>';
  }
  if($value['profil_id'] == '2'){
    echo $value['nom']." ".$value['prenom'].'<br><br>'."Mail :"." ".$value['mail'].'<br><br>'."Telephone :"." ".$value['tel'].'<br><br>'."Adresse :"." ".$value['adresse'].'<br><br>'."Parent d'un elève en :"." ".$value['classe'];
    echo '<br><br><input type="button" value="Retour" onclick="window.location.href='.$lienparent.'"/>';
  }
  if($value['profil_id'] == '3'){
    echo $value['nom']." ".$value['prenom'].'<br><br>'."Mail :"." ".$value['mail'].'<br><br>'."Telephone :"." ".$value['tel'].'<br><br>'."Adresse :"." ".$value['adresse'].'<br><br>'." "."Administrateur";
    echo '<br><br><input type="button" value="Retour" onclick="window.location.href='.$lienadmin.'"/>';
  }
}
?>
