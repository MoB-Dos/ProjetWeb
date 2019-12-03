<!DOCTYPE html>
<html>
<head>
bon je test un mot de passe crypter
<form action="inscription.php" method="POST">
</head>
nom : <input type="text" name='nom'><br>
    prénom : <input type="text" name="prenom"><br>
    tel : <input type="text" name="tel"><br>
    adresse <input type="text" name="adresse"><br>
        mot de passe : <input type="text" name="mdp" /><br />
    <input type="submit" value="Crypter" />
</form>
<?php
if(isset($_POST['mdp']))
{
?>
<strong>MD5</strong>: <?php echo md5($_POST['mdp']); ?><br />
<strong>SHA1</strong>: <?php echo sha1($_POST['mdp']); ?>
<?php
}
 ?>
</html>
