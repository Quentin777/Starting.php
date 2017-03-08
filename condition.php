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

	if ($genre == 'homme'){ 
		echo "Vous êtes un $genre";
	}else if{
		echo "Vous êtes un $genre";
	}

	if ($age < 18){
		echo "et vous avez $age ans";
	}else if{
		echo "et vous avez $age ans";
	}
 ?>




<?php if ($maVariable != 'Homme'){
 	  echo  "C\'est une développeuse !!!";
 	 }else if{
 	  echo "C\'est un développeur !!!";
 	 } 
?>

  
<?php
	if ($maVariable == false){
	echo  "c\'est pas bon !!!";
	}else if{
		echo "c\'est ok !!";
	}
?>


<?php
	if ($monAge >= 18){
 	echo 'Tu es majeur';
 	}else if{ 
	echo 'Tu n\'es pas majeur';
?>


<?php
	if ($maVariable = 1){
		echo "c'est ok";
	}else if{
		echo "'c'est pas bon !!!'";
	}
?>


</body>
</html>
