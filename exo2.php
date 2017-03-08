<!DOCTYPE html>
<html>
<head>
	<title>exo2</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

<?php 
	
	$maVariable = homme;
	if ($maVariable != 'Homme'){
 	  echo  "C\'est une développeuse !!!";
 	 }else if{
 	  echo "C\'est un développeur !!!";
 	 } 
?>

  
<?php
	$maVariable = false;
	if ($maVariable == false){
	echo  "c\'est pas bon !!!";
	}else if{
		echo "c\'est ok !!";
	}
?>


<?php
	$maVariable = 18;

	if ($monAge >= 18){
 	echo 'Tu es majeur';
 	}else if{ 
	echo 'Tu n\'es pas majeur';
?>


<?php
	
	$maVariable = 1;
	if ($maVariable = 1){
		echo "c'est ok";
	}else if{
		echo "'c'est pas bon !!!'";
	}
?>


</body>
</html>
