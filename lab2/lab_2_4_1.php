<title>Razyapov Edgar</title>
<h1>Вариант 8</h1>
<?php

$inarray = array(rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10));
print_r ($inarray);
$tmp = array_count_values($inarray);
$max = max($tmp);
$result = array_search( $max, $tmp); 
echo '<br>Самый повторяющийся элемент массива: ', $result, '. Он повторяется ', $max, ' раз(а).';

 ?>
