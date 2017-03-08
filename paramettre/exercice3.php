<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>

<?php
if (isset($_GET['dateDebut']) AND isset($_GET['dateFin'])) 
{
	echo 'Bonjour ' . $_GET['dateDebut'] . ' ' . $_GET['dateFin'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'il manque des trucs';
}
?>

</body>
</html>