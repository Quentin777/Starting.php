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

	$test = "on arrive presque";
	for ($i=0; $i<5 ; $i++){ 
		echo "$test.<br>";
	}


?>

</body>
</html>