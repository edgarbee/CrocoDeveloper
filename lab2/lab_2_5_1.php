<!DOCTYPE html>
<html>
<head>
	<title>Razyapov Edgar</title>
</head>
<body>
<h1>Варинат 8</h1>
<?php

$Massive = array(array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1)
				 );

echo 'Исходный массив' . '<br/>';
for ($i=0; $i < 9; $i++) {
	for ($j=0; $j < 9; $j++) {
	$Massive[$i][$j] = rand(1,9);
	echo $Massive[$i][$j] . ' ';
	}
	echo '<br/>';
}
$sm = 0;
echo 'Скорректированный массив' . '<br/>';
for ($i=0; $i < 9; $i++) {
	for ($j=0; $j < 9; $j++) {
		$sm = $sm + $Massive[$i][$j] - $Massive[$j][$i];
		$Massive[$i][$i] = $sm;
	echo $Massive[$i][$j] . '  ';
	}
	echo '<br/>';
}

?>
</body>
</html>
