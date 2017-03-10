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
<?php  

if (isset($GET['mois'],$_GET['annee'])){
	$mois = (int) $_GET['mois'];
	$annee = (int) $_GET ['annee'];
}else{
	$mois = (int) date('m');
	$annee = (int) date('Y');
}
var_dump($mois);
var_dump($annee);


$calendrier = new DateTime($annee.'-'.$mois.'-1');
$nombreDeJours = cal_days_in_month(CAL_GREGORIAN, $mois, $annee);
$numtour=0;

switch ($calendrier->format('l')){
    case 'Monday':
        $index=0;
        break;
    case 'Tuesday':
        $index=1;
        break;
    case 'Wednesday':
        $index=2;
        break;
    case 'Thursday':
        $index=3;
        break;
    case 'Friday':
        $index=4;
        break;
    case 'Saturday':
        $index=5;
        break;
    case 'Sunday':
        $index=6;
        break;
}

$numerosdumois = array();
for ($i=0; $i < $index ; $i++) {
    array_push($numerosdumois, ' ');
}
for ($numerojours=1; $numerojours <= $nombreDeJours ; $numerojours++) {
    array_push($numerosdumois, $numerojours);
}
for ($i=0; $i < 6-$index ; $i++) {
    array_push($numerosdumois, ' ');
}


?>
<link rel="stylesheet" type="text/css" href="style/css/style.css">

<table>
    <tr>
        <td colspan="7">mois et l'année</td>
    </tr>    
    <tr>
        <td>Lu</td>
        <td>Ma</td>
        <td>Me</td>
        <td>Je</td>
        <td>Ve</td>
        <td>Sa</td>
        <td>Di</td>
    </tr>

    <?php
    for ($semaine=0; $semaine <= 4; $semaine++) {
        echo '<tr>';
        for ($jour=0; $jour <= 6; $jour++) {
            echo '<td>'.$numerosdumois[$numtour].'</td>';
            $numtour++;
        }
        echo '</tr>';    
    }    ?>

</table>

<form action="" method="get">
	<select name="mois">
		<option value="1">Janvier</option>
		<option value="2">Fevrier</option>
		<option value="3">Mars</option>
		<option value="4">Avril</option>
		<option value="5">Mai</option>
		<option value="6">Juin</option>
		<option value="7">Juillet</option>
		<option value="8">Aout</option>
		<option value="9">Septembre</option>
		<option value="10">Octobre</option>
		<option value="11">Novembre</option>
		<option value="12">Décembre</option>	
	</select>
	<select name="année">
		<?php for ($i=0; $i < 100 ; $i++) { 
			echo '<option value"'.$i.'">'.$i.'</option>';
		}
		?>

	</select>
	<button type="submit">OK</button>

</form>

</body>
</html>