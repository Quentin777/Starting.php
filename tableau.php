<?php 

$mois = ('janvier', 
		 'fevrier', 
		 'mars', 
		 'avril', 
		 'mai' , 
		 'juin', 
		 'juillet',
		 'aout',
		 'septembre',
		 'octobre', 
		 'novembre' , 
		 'decembre');

$departement = (02 => 'janvier', 
		 59 => 'fevrier', 
		 62 => 'mars', 
		 60 => 'avril',);
for ($boucle=0; $boucle < count($departement) ; $boucle++) { 
	echo de la valeur;
}
foreach ($departement as $value) {
	echo $value
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

<?php  //exo1 

echo $mois[2];
	
?>

<?php // exo 2

echo $mois[2];


?>

<?php // exo 2

echo $mois[5] = 'julien';


?>


<?php 

	echo $departement[59];

 ?>

</body>
</html>