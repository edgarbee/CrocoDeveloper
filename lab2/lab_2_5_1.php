<!DOCTYPE html>
<html>
<head>
	<title>Razyapov Edgar</title>
</head>
<body>
<h1>Варинат 5</h1>
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
	$Massive[$i][$j] = rand(0,20);
	echo $Massive[$i][$j] . ' ';
	}
	echo '<br/>';
}

echo 'Скорректированный массив' . '<br/>';
for ($i=0; $i < 9; $i++) {
	for ($j=0; $j < 9; $j++) {
		if ($Massive[$i][$j] != 0){
			$Massive[$i][$j] = ('-1/'.$Massive[$i][$j]);
		}
	echo $Massive[$i][$j] . ' ';
	}
	echo '<br/>';
}

?>
</body>
</html>
