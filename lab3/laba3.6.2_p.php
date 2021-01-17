<?php

$text = $_POST["upper"];

$pattern = '/^[a-z0-9]+$/i';


$A=[];
$len = mb_strlen($text);
for ($i=0; $i < $len; $i++) {
    $A[$i]=mb_substr($text, $i, 1);
  }

for ($i=0; $i < $len; $i++) {
    if(preg_match($pattern, $A[$i])){
    echo mb_strtoupper($A[$i]);
    }
    else {
        echo $A[$i];
    }
  }


 ?>
