<!DOCTYPE html>
<html>
<head>
bon je test un mot de passe crypter
<form action="inscription.php" method="get">
</head>
        <input type="text" name="mot" /><br />
    <input type="submit" value="Crypter" />
</form>
<?php
if(isset($_GET['mot']))
{
?>
<strong>MD5</strong>: <?php echo md5($_GET['mot']); ?><br />
<strong>SHA1</strong>: <?php echo sha1($_GET['mot']); ?>
<?php
}
 ?>
</html>
