<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/autoload.php';
session_start ();

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['mail'];
$tel=$_POST['tel'];
$adresse=$_POST['adresse'];
$classe=$_POST['classe'];
$profil_id=$_POST['profil_id'];
$mdp=md5($_POST['mdp']);
$mdp2=md5($_POST['mdp2']);

if ($profil_id=='etudiant') {
  $profil_id='1';
}
elseif ($profil_id=='parent') {
  $profil_id='2';
}

try{
$bdd= new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8','root','');
}

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}

$reponse=$bdd->prepare('SELECT * FROM utilisateur WHERE nom=? AND prenom=? OR mail=?');
$reponse->execute(array($nom, $prenom,$email));
$donne=$reponse->fetchall();

if ($donne) {
  echo '<body onLoad="alert(\'Utilisateur déjà existant\')">';

  echo '<meta http-equiv="refresh" content="0;URL=Inscription1.php">';
}

else {
  if ($mdp == $mdp2) {
    $req = $bdd->prepare('INSERT INTO utilisateur (nom, prenom, mail, tel, adresse, classe, profil_id, mdp) VALUES (?,?,?,?,?,?,?,?)');
    $req -> execute(array($nom, $prenom, $email, $tel, $adresse, $classe, $profil_id, $mdp));



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
        $mail->Subject = 'test';
        $mail->Body    = 'Inscription reussie!';
        $mail->AltBody = 'Inscription reussie!';

        $mail->send();
        echo 'Message has been sent';
          } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
          }
    header("location:http://localhost/Projet/GIT/ProjetWeb/Connexion/Connexion.php");
  }

  else {
    echo '<body onLoad="alert(\'Veuillez entrer deux mots de passe identiques\')">';

    echo '<meta http-equiv="refresh" content="0;URL=Inscription1.php">';
  }
}

?>
