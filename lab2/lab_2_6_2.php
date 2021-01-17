<!DOCTYPE html>
<html>
<head>
	<title>Razyapov Edgar</title>
</head>
<body>
	<h1>Вариант 13</h1>
<?php
    function F($u, $t){
        if ($u*$t < 0.5){
            return (1 + cos($t-$u))/($u/$t + $t*$t);
        }
        else if($u*$t >= 0.5){
            return sin(log(abs($u/$t)));
        }
    }

    $a = rand(-10, 10);
    $b = rand(-10, 10);

    echo "<p> Аргумент A = ".$a;
    echo "<p> Аргумент B = ".$b;

    $z = pow(cos(F($a, $b * $b - $a)), 3) + F($a+$b,$a-$b);

    echo "<p> Результат = ".$z;
?>
</body>
</html>
