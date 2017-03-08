<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>

<?php
if (isset($_GET['semaine'])) 
{
	echo 'Bonjour ' . $_GET['semaine']!';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'y e né sai pow';
}
?>

</body>
</html>