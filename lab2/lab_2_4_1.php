<title>Razyapov Edgar</title>
<h1>Вариант 3</h1>
<?php
    $A=[];

    $count=rand(1,20);

    echo "Исходный массив: ";
    for ($i=0; $i < $count; $i++) {
      $A[$i]=rand(10,100);
      echo $A[$i].' ';
    }
    $K=$A[0];
    echo "<br>";
    echo 'K= '.$K;
    echo "<br>";

    echo "Скорректированный массив: ";
    for ($i=0; $i < $count; $i++) {
      if ($A[$i]<$K) {
        $A[$i]=$K;
      }
      echo $A[$i].' ';
    }


 ?>
