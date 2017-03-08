<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

<form action="action.php" method="post">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre âge : <input type="text" name="age" /></p>
 <p><input type="submit" value="OK"></p>
</form>
	<p> Bonjour, <?php echo htmlspecialchars($_POST['nom']); ?>.</p>
	<p>Tu as <?php echo (int)$_POST['age']; ?> ans.</p>
</body>
</html>