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

	$age = 12;
	$genre = "homme";

	if ($age < 18 && $genre =="homme"){ 
		echo "Vous êtes un homme mineur";
	}elseif{($age >= 18 && $genre =="homme"){ 
		echo "Vous êtes un homme majeur";
	}elseif{($age >= 18 && $genre =="homme"){ 
		echo "Vous êtes un homme majeur";

	if ($age < 18){
		echo "et vous avez $age ans";
	}else if{
		echo "et vous avez $age ans";
	}
 ?>

</body>
</html>
