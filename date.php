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
$calendrier = new DateTime('2007-06-1');
$nombreDeJours = cal_days_in_month(CAL_GREGORIAN, 6, 2007);
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

</body>
</html>