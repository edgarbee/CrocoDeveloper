<?php
$TEXT = $_POST["givenText"];

 $count = strlen(utf8_decode($TEXT));
 $mas = str_split($TEXT);

 $k = 0;
 $n = 0;
 for ($i=0; $i < $count ; $i++) {
   if (strtoupper($mas[$i]) == $mas[$i]) {
     $k = $k + 1;
   } else {
     $n = $n + 1;
   }
 }
 echo 'Общее число заглавных букв: ' . $k . '<br>';
 echo 'Общее число прописных букв: ' . $n . '<br>';
 echo 'Общее число символов в тексте: ' . $count . '<br>';
 echo 'Общее число символов в процентах: ' . ($count/$count)*100 .'%'. '<br>';
 echo '<b>Ответ:</b><br>';
 echo 'Заглавных букв: ' . ($k/$count)*100 .'%'. '<br>';
 echo 'Прописных букв: ' . ($n/$count)*100 .'%' .'<br>';
?>
