<?php


$email = $_GET['mail'];


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    /*on choissie notre host*/
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    /*on accede a la boite mail avec le Mdp et le user */
    $mail->Username   = 'projetweb932@gmail.com';
    $mail->Password   = 'projetweb932';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    /*on choissie qui va envoyer*/
    $mail->setFrom('projetweb932@gmail.com', 'Mailer');
    $mail->addAddress($email, 'user');

    $mail->isHTML(true);
    /*sujet du mail*/
    $mail->Subject = 'test';
    /*le messgae du mail*/
    $mail->Body    = 'ce mail a été envoyer grace a un programme';
    /*il faut mettre le meme messgae car cest pour ceux quin on des boites mail speciales*/
    $mail->AltBody = 'ce mail a été envoyer grace a un programme';
    $mail->Body    = 'regarder ça marche!';
    $mail->AltBody = 'regarder ça marche!';

    /* pour verifier si il y a des erreur*/
    $mail->send();
    echo 'Message has been sent';
      } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }

 ?>
