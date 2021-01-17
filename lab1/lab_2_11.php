<?php
    print("<p> Вариант 5 </p>");
    $x=rand(1,499);
     print ("Случайное число N < 500: ".$x);
    
    $r=intval(floor(pow($x, 1/2)),10);

     for ($a=1; $a<$r; $a++){
            for ($b=$a; $b<$r; $b++){
                $t=$a*$a+$b*$b;
                if ($x==$t){
                    print("<p> Можно: </p>" . $a."*".$a."+".$b."*".$b."=".$x );
                    
                }
            }
        }

?>
