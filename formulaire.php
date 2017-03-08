<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>


<form action="formulaire.php" method="GET">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre âge : <input type="text" name="age" /></p>
 <SELECT name="Civilité" size="1">
	<OPTION>Mr
	<OPTION>Mme
	<OPTION>Mademoiselle
	</SELECT>
 <p><input type="submit" value="OK"></p>
 <p><input type="submit" value="Envoie fichier">
</form>


<?php
if (isset($_GET['nom']) AND isset($_GET['age'])) 
{
	echo 'Bonjour '.$_GET['Civilité'].' '. $_GET['nom'] . ' ' . $_GET['age'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'il manque des trucs';
}
?>

</body>
</html>