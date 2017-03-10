<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>


<form action="formulaire.php" method="post" enctype="multipart/form-data">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre âge : <input type="text" name="age" /></p>
 <SELECT name="Civilité" size="1">
	<OPTION>Mr
	<OPTION>Mme
	<OPTION>Mademoiselle
	</SELECT>
 <p><input type="submit" value="OK"></p>
 <p><input type="file" name= "fichier" value="fichier">
</form>


<?php
if (isset($_POST['nom']) AND isset($_POST['age'])) 
{
	echo 'Bonjour '.$_POST['Civilité'].' '. $_POST['nom'] . ' ' . $_POST['age'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'il manque des trucs';
}


if ($_FILES['fichier']['type'] == 'application/pdf'){

}else{
	echo 'erreur type de ficher';
}
?>

</body>
</html>