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

<?php  
	$varun = 0;
	$vardeux = 3;

	while ($varun <= 20){
		$varun = $varun * $vardeux;
		echo "$varun.</br>";
    	$varun = $varun + 1;
    }

?>


<?php  
	
	$varun = 100;
	$vardeux = 1;

	while ($varun > 10){
		$varun = $varun * $vardeux;
		echo "$varun.</br>";
		$varun = $varun - 50;
	}

?>

<?php  

	$test = "on arrive presque";
	for ($i=0; $i<5 ; $i++){ 
		echo "$test.<br>";
	}


?>

<?php  

	$test = "c'est presque bon";
	for ($i=20; $i>0 ; $i--){ 
		echo "$test.<br>";
	}


?>

</body>
</html>