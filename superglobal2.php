<?php
session_start();
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

	<p> <!-- crée un formulaire pour modier les cookie) -->
   Tu t'appelles <?php echo $_COOKIE['login'] = $_POST['login']; ?> et ton mdp est <?php echo $_COOKIE['mdp'] = $_POST['mdp']; ?> </p>

 <form action="superglobal2.php" method="POST">
 <label for="login"> <p>Login: <input type="text" name="login" /></p></label>
 <label for="mdp"> <p>mots de passe: <input type="text" name="mdp" /></p></label>
 <p><input type="submit" value="OK"></p>
</form>

</body>
</html>