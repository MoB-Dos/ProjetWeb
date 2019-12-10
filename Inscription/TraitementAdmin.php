<?php
//Démarrage de la session
session_start();

//Connexion à phpmailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/autoload.php';

//Enregistrement des variables
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['mail'];
$tel=$_POST['tel'];
$adresse=$_POST['adresse'];
$mdp=md5($_POST['mdp']);
$mdp2=md5($_POST['mdp2']);

//Connexion à la base de données projetweb
try{
$bdd= new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8','root','');
}

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}

//Sélection des données dans la table utilisateur
$reponse=$bdd->prepare('SELECT * FROM utilisateur WHERE nom=? AND prenom=? OR mail=?');
$reponse->execute(array($nom, $prenom,$email));
$donne=$reponse->fetchall();

//Si l'utilisateur existe déjà, on affiche une boite de dialogue d'alerte
if ($donne) {
  echo '<body onLoad="alert(\'Utilisateur déjà existant\')">';

  echo '<meta http-equiv="refresh" content="0;URL=Inscription1.php">';
}

//Sinon si les mots de passe sont bien rentrés, on enregistre dans la tabe utilisateur
else {
  if ($mdp == $mdp2) {
    $req = $bdd->prepare('INSERT INTO utilisateur (nom, prenom, mail, tel, adresse, classe, profil_id, mdp) VALUES (?,?,?,?,?,?,?,?)');
    $req -> execute(array($nom, $prenom, $email, $tel, $adresse, '', '3', $mdp));

    //Envoi du mail de confirmation
    $mail = new PHPMailer(true);

    try {

        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'projetweb932@gmail.com';
        $mail->Password   = 'projetweb932';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('projetweb932@gmail.com', 'Mailer');
        $mail->addAddress($email, 'user');

        $mail->isHTML(true);
        $mail->Subject = 'Inscription';
        $mail->Body    = 'Inscription reussie!';
        $mail->AltBody = 'Inscription reussie!';

        $mail->send();
        echo 'Message has been sent';
          } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
          }

    //Renvoi vers la page Connexion
    header("location:http://localhost/Projet/GIT/ProjetWeb/TemplateConnexion/ConnexionTem.html");
  }

  //Sinon, on affiche une boite de dialogue d'erreur
  else {
    echo '<body onLoad="alert(\'Veuillez entrer deux mots de passe identiques\')">';

    echo '<meta http-equiv="refresh" content="0;URL=Inscription1.php">';
  }
}

?>
