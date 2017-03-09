<?php

// On démarre la session AVANT d'écrire du code HTML

session_start();


// On s'amuse à créer quelques variables de session dans $_SESSION

$_SESSION['prenom'] = 'Jean';

$_SESSION['nom'] = 'Dupont';

$_SESSION['age'] = 24;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>

<?php

echo $_SERVER['REMOTE_ADDR'];
?>

</body>
</html>


