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
	}elseif{($age < 18 && $genre =="femme"){ 
		echo "Vous êtes un femme mineur";
	}elseif{($age >= 18 && $genre =="femme"){ 
		echo "Vous êtes un femme majeur";
	}
	
 ?>

 //exo4
<?php  
 $magnitude = 5;

 case '1':
 echo "blabla1";
 break;
 case '2':
 echo "blabla2";
 break;
 case '3':
 echo "blabla3";
 break;
 case '4':
 echo "blabla4";
 break;
?>

<?php

 $maVariable != 'Homme'
 
 echo 'C\'est une développeuse !!!';
}else{
	echo 'C\'est un développeur !!!';
}

?>

<?php
 echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
?>

[5:07]  
<?php
 echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
?>

[5:07]  
<?php
 echo ($maVariable) ? 'c'est ok !!' : 'c'est pas bon !!!';
?>

?>

</body>
</html>
