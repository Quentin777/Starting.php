<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

<form action="user.php" method="GET">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre âge : <input type="text" name="age" /></p>
 <p><input type="submit" value="OK"></p>
  	<SELECT name="Civilité" size="1">
	<OPTION>Mr
	<OPTION>Mme
	<OPTION>Mademoiselle
	</SELECT>
</form>

<form action="user.php" method="POST">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre âge : <input type="text" name="age" /></p>
 	<SELECT name="Civilité" size="1">
	<OPTION>Mr
	<OPTION>Mme
	<OPTION>Mademoiselle
	</SELECT>
 <p><input type="submit" value="OK"></p>
</form>



</body>
</html>