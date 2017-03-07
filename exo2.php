<!DOCTYPE html>
<html>
<head>
	<title>exo2</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

<?php 

	$age = 19;

	if ($age < 18){ 
		echo "tu es majeur";
	}else{
		echo "tu es mineur";
	}

 ?>




<?php 

	$age = 42;
	$genre = "homme";

	if ($genre == "homme"){ 
		echo "Vous êtes un $genre";
	}else if{ ($genre == "femme"){
		echo "Vous êtes un $genre";
	}

	if ($age < 18){
		echo "et vous avez $age ans";
	}else if ($age > 18){
		echo "et vous avez $age ans";
	}
 ?>


</body>
</html>
