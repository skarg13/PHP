<?php 
$a = '<h1>Hello World!</h1>';
$b = 'Hello';
$c = date('Y');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $b ?></title>
</head>
<body>

<?php 
	echo $a;
	
?>

<?php
	$y = 1;
	$z = 2;
	 
	$y+=+$z-$z=$y; // тут както сложно для восприятия
	 
	echo('y = ' . $y. '<br>');
	echo('z = ' . $z. '<br>');
?>

<?php
	$a = 1;
	$b = 2;

	[$a,$b]=[$b,$a]; // тут для восприятия проще 

	echo ('a = ' .$a . '<br>');
	echo ('b = ' .$b . '<br>');

	echo $c;
?>

</body>
</html>