<?php
    $a=rand(-20,20);
    $d=rand(-20,20);
    $c=rand(-20,20);

    $y=($c/$d+3*($a/2))/($c-$a+1);

    echo 'Вариант 14 <br>';
    print("(($c / $d) + 3 * ( $a / 2 )) / ($c - ($a) + 1) = $y");

?>
