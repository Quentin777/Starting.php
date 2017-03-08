<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>

<?php
if (isset($_GET['langage']) AND isset($_GET['serveur'])) 
{
	echo 'Bonjour ' . $_GET['langage'] . ' ' . $_GET['serveur'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'y e né sai pow';
}
?>

</body>
</html>