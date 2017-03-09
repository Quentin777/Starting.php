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


echo time();

// Secondes écoulées entre le 1er janvier 1970 et le 27 mai 2002 à midi
echo mktime(15, 34, 12, 3, 2, 2016); 

?>

</body>
</html>