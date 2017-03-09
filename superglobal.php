<?php

session_start();
setcookie('login', $_POST['login'], time() + 365*24*3600, null, null, false, true);
setcookie('mdp', $_POST['mdp'], time() + 365*24*3600, null, null, false, true); 


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
echo $_SERVER ['SERVER_NAME'];
echo $_SERVER ['HTTP_USER_AGENT'];
?>

<form action="superglobal2.php" method="POST">
 <label for="login"> <p>Login: <input type="text" name="login" /></p></label>
 <label for="mdp"> <p>mots de passe: <input type="text" name="mdp" /></p></label>
 <SELECT name="Civilité" size="1">
	<OPTION>Mr
	<OPTION>Mme
	<OPTION>Mademoiselle
	</SELECT>
 <p><input type="submit" value="OK"></p>
</form>

</body>
</html>


