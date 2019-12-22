
<?php
/*on declare la bdd et on prepare la requete */
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8','root','');

$reponse = $bdd->prepare('SELECT*FROM document');
$reponse->execute();
$donne = $reponse->fetchall();

/*avec un foreach on affiche tout les liens pour telecharger*/
foreach ($donne as $valeur){

echo "<a href= ". $valeur['lien'].">Telecharger le dossier</a> </br>";

}

?>
