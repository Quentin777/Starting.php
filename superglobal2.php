<?php

// On démarre la session AVANT d'écrire du code HTML

session_start();
if (!isset($_COOKIE['login']) || !isset($_COOKIE['mdp'])){
	setcookie('','$_POST',time() + 365*24*3600, null, null, false, true);
}
setcookie('login', $_POST['login'], time() + 365*24*3600, null, null, false, true); // On écrit un cookie

setcookie('mdp', $_POST['mdp'], time() + 365*24*3600, null, null, false, true); // On écrit un autre 



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

	<p>

    Hé ! Je me souviens de toi !<br />

   Tu t'appelles <?php echo isset($_COOKIE['login']); ?> et ton mdp est <?php echo isset($_COOKIE['mdp']); ?> 

</p>

</body>
</html>