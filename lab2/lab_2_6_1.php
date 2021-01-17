<!DOCTYPE html>
<html>
<head>
	<title>Razyapov Edgar</title>
</head>
<body>
	<h1>Вариант 8</h1>
<?php
    function F($u, $t){
        if ($u >= 0 && $t >= 0){
            return $u - 2*$t;
        }
        else if($u < 0 && $t >= 0){
            return $u + $t;
        }
        else if($u >= 0 && $t < 0){
            return $u*$u -2*$t;
        }
        else if($u < 0 && $t < 0){
            return $u*$t +3*$t;
        }
    }

    $a = rand(-10, 10);
    $b = rand(-10, 10);

    echo "<p> Аргумент A = ".$a;
    echo "<p> Аргумент B = ".$b;

    $z = F($a, $b * $b - $a) + F($a,$b);

    echo "<p> Результат = ".$z;
?>
</body>
</html>
