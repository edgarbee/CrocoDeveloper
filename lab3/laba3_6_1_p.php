<?php
$text = $_POST["givenText"];

$arr = explode(" ", $text);
 
foreach ($arr as $val) {
     echo $val . "<br>";
}
?>
