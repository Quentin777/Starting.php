<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>

<?php
if (isset($_GET['batiment']) AND isset($_GET['salle'])) 
{
	echo 'Bonjour ' . $_GET['batiment'] . ' ' . $_GET['salle'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'y ne sai pow!';
}
?>

</body>
</html>