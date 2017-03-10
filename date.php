<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
<?php  
echo strftime("%A %e %B %Y");
?>


<?php


echo time().'<br>';

// Secondes écoulées entre le 1er janvier 1970 et le 27 mai 2002 à midi
echo mktime(15, 34, 12, 3, 2, 2016).'<br>'; 


$date1 = mktime(0,0,0,5,16,2016);
$date2 = time();
 
// On récupère la différence de timestamp entre les 2 précédents
$nbJoursTimestamp = $date2 - $date1;
 
// ** Pour convertir le timestamp (exprimé en secondes) en jours **
// On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc :
$nbJours = $nbJoursTimestamp/86400; // 86 400 = 60*60*24
 
echo "Nombre de jours : ".$nbJours;

?>

<br><br>

<link rel="stylesheet" type="text/css" href="style/style.css">

<table>
	<tr>
		<td>coucou</td>	
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
	</tr>
	<tr>
		<td>coucou</td>	
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
	</tr>	
	<tr>
		<td>coucou</td>	
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
	</tr>
	<tr>
		<td>coucou</td>	
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
	</tr>	
	<tr>
		<td>coucou</td>	
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
	</tr>
	<tr>
		<td>coucou</td>	
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
	</tr>
		<tr>
		<td>coucou</td>	
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
		<td>coucou</td>
	</tr>
</table>

</body>
</html>