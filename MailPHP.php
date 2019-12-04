<?php

$test = $_GET['message'];

// envoi d'un email à webmaster@tutovisuel.com
PhpMailer("projetweb932@gmail.com", "ceci est un test", "lol");
echo'ok';

 ?>
