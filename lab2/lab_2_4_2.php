<title>Razyapov Edgar</title>
<h1>Вариант 13</h1>
<?php
  $A=[];
  $count=rand(5,10);
  

  echo "Исходный массив: ";
  for ($i=0; $i < $count; $i++) {
    $A[$i]=rand(-10,10);
    echo $A[$i].' | ';
  }
  $sum = 0;
  for ($i=0; $i < $count; $i++) {
      if ($A[$i] < 0 && $A[$i]%2 ){
          $sum=$sum + $A[$i];
      }
  }
  echo "<br>Сумма " . $sum;
 ?>
