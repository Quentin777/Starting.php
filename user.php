<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	
	<p> Bonjour, <?php echo htmlspecialchars($_GET['nom']); ?>.</p>
	<p>Tu as <?php echo (int)$_GET['age']; ?> ans.</p>

</body>
</html>