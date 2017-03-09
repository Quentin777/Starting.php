<!DOCTYPE html>
<html>
<head>
	<title>boucle</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
<?php  
	$mavariable = 0;
	for ($i=10; $i > 0 ; $i--){ 
			echo "$mavariable";
			$mavariable = $mavariable + 1;
    	}

?>

<br>
<?php  
	$varun = 0;
	$vardeux = 2;

	while ($varun <= 20){
		$varun = $varun * $vardeux;
		echo "$varun";
    	$varun = $varun + 1;
    }

?>

<br>
<?php  
	
	$varun = 100;
	$vardeux = 1;

	while ($varun > 10){
		$varun = $varun * $vardeux;
		echo "$varun.<br>";
		$varun = $varun - 1;
	}

?>

<br>
<?php  
	
	$varun = 100;
	$vardeux = 1;

	while ($varun > 10){
		$varun = $varun * $vardeux;
		echo "$varun.<br>";
		$varun = $varun / 2;
	}

?>

<br>
<?php  

	$test = "on arrive presque";
	for ($i=0; $i<15 ; $i++){ 
		echo "$test.<br>";
	}


?>

<br>
<?php  

	$test = "c'est presque bon";
	for ($i=20; $i>0 ; $i--){ 
		echo "$test.<br>";
	}


?>

<br>
<?php  

	$test = "on tieng le bon boo";
	for ($i=0; $i<100 ; $i=$i+15){ 
		echo "$test.<br>";
	}


?>

<br>
<?php  

	$test = "enfin";
	for ($i=200; $i>0 ; $i=$i-12){ 
		echo "$test.<br>";
	}


?>

</body>
</html>