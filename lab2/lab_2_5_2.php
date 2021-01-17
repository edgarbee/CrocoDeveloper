<!DOCTYPE html>
<html>
<head>
	<title>Razyapov Edgar</title>
</head>
<body>
	<h1>Вариант 13</h1>
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

echo 'Решение' . '<br/>';
$sum = 0;
$k = rand(-20,20);
$m = count($Massive);
$n = count($Massive);

if ($k<=-$m || $k>=$n)
{
    echo "Индексов, имеющих разность ". $k .", не существует.";
}
else {
     
    for ($i=0; $i < $n; $i++) {
        for ($j=0; $j < $m; $j++){
            if (($i-$j)==$k){
                $sum = $sum + $Massive[$i][$j];
            }
        }
    }
    echo "<br>Сумма элементов А(i,j) массива А(m,n), имеющих заданную разность индексов i-j=k:<b> ". $sum;
}


?>
</body>
</html>
