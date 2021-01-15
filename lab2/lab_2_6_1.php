<!DOCTYPE html>
<html>
<head>
	<title>Razyapov Edgar</title>
</head>
<body>
	<img src="1.png">
<?php
echo '<br/>';

$a = rand(-20,20);
$b = rand(-20,20);

echo 'Первое число: ' . $a . '<br/>';
echo 'Второе число: ' . $b;

// первая часть третьего условия
$t3 =$a-1;
$F = array(3);

for ($i=0; $i < 3; $i++) {
	//1
if ($t3 > 0 && $b > 0) {
	$F[$i] = $t3*$t3 + $b*$b;
} elseif ($a > 0 && $b >0) {
	$F[$i] = $a*$a + $b*$b;
}
	//2
if ($t3<=0 && $b <= 0) {
		$F[$i] = $t3 + $b*$b;
	} elseif ($a <= 0 && $b <=0) {
	$F[$i] = $a + $b*$b;
}
	//3
if ($t3>0 && $b <= 0) {
		$F[$i] = $t3 - $b;
	} elseif ($a > 0 && $b <=0) {
	$F[$i] = $a - $b;
}
	//4
if ($t3 <= 0 && $b > 0) {
		$F[$i] = $t3 + $b;
	} elseif ($a <= 0 && $b >0) {
	$F[$i] = $t3 + $b;
}
}
$z = $F[0] + $F[1]+$F[2]; // Сумма функций

echo '<br/>' . 'Сумма функций равна: ' . $z;

?>
</body>
</html>
