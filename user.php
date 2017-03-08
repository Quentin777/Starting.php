<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	
	<p> Bonjour, <?php echo htmlspecialchars($_GET['Civilité']);($_GET['nom']); ?>.</p>
	<p>Tu as <?php echo (int)$_GET['age']; ?> ans.</p>

	<p> Bonjour, <?php echo htmlspecialchars($_POST['Civilité'])($_POST['nom']); ?>.</p>
	<p>Tu as <?php echo (int)$_POST['age']; ?> ans.</p>

</body>
</html>