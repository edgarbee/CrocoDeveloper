<?php
  require 'db.php';
  $data=$_POST
 ?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Изменение данных. Разяпов</title>
  </head>
  <body>

<?php

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = mysqli_connect("localhost","f0505640_edgar","1234","f0505640_edgar");
    mysqli_set_charset($mysqli, "utf8mb4");

    $dat = mysqli_query($mysqli,"SELECT * FROM bank");

    if ($dat){
        // Для каждой строки из запроса
        while ($row = $dat->fetch_array()){
            $name = $row['name'];
            $inn = $row['inn'];
            $country = $row['country'];
            $class = $row['class'];
            $volume = $row['volume'];
            $id=$row['id'];
        }}
//Изменение названия
    if (isset($data['change_name'])) {
      $errors=array();
      if ($data['name']=='') {
        $errors[]='Введите новое название';
      }
      if ($data['name']==$name) {
        $errors[]='Такое название уже стоит';
      }
      if(empty($errors)){
        echo 'Вы успешно изменили название';
        $query="UPDATE bank SET name='$data[name]' WHERE id=$id";
        $result=mysqli_query($mysqli, $query);

        if (!mysqli_query($mysqli, $query)) {
      echo "Что-то не то $query".mysql_error()."<br><br>";
      $result = mysqli_query($query);
    }}
else {
      echo array_shift($errors);
    }
}

//Изменение инн
if (isset($data['change_inn'])) {
  if ($data['inn']=='') {
    $errors[]='Введите новый ИНН';
  }
  if ($data['inn']==$inn) {
    $errors[]='Такой ИНН стоит';
  }
  if(empty($errors)){
    echo 'Вы успешно изменили ИНН';
    $query="UPDATE bank SET inn='$data[inn]' WHERE id=$id";
    $result=mysqli_query($mysqli, $query);

    if (!mysqli_query($mysqli, $query)) {
  echo "Что-то не то $query".mysql_error()."<br><br>";
  $result = mysqli_query($query);
}}
else {
  echo array_shift($errors);
  }
}

//Изменение страны
if (isset($data['change_country'])) {
  if ($data['country']=='') {
    $errors[]='Введите новое название страны';
  }
  if ($data['country']==$country) {
    $errors[]='Такое название страны уже стоит';
  }
  if(empty($errors)){
    echo 'Вы успешно изменили название страны';
    $query="UPDATE bank SET country='$data[country]' WHERE id=$id";
    $result=mysqli_query($mysqli, $query);

    if (!mysqli_query($mysqli, $query)) {
  echo "Что-то не то $query".mysql_error()."<br><br>";
  $result = mysqli_query($query);
}}
else {
  echo array_shift($errors);
  }
}

//Изменение класс надежности
if (isset($data['change_class'])) {
  if ($data['class']=='') {
    $errors[]='Введите новый класс надежности';
  }
  if ($data['class']==$class) {
    $errors[]='Такое класс надежности уже стоит';
  }
  if(empty($errors)){
    echo 'Вы успешно изменили класс надежности';
    $query="UPDATE bank SET class='$data[class]' WHERE id=$id";
    $result=mysqli_query($mysqli, $query);

    if (!mysqli_query($mysqli, $query)) {
  echo "Что-то не то $query".mysql_error()."<br><br>";
  $result = mysqli_query($query);
}}
else {
  echo array_shift($errors);
  }
}

//Изменение объёма
if (isset($data['change_volume'])) {
  if ($data['volume']=='') {
    $errors[]='Введите новый объем активов';
  }
  if ($data['volume']==$volume) {
    $errors[]='Такой объем активов уже стоит';
  }
  if(empty($errors)){
    echo 'Вы успешно изменили объем активов';
    $query="UPDATE bank SET volume='$data[volume]' WHERE id=$id";
    $result=mysqli_query($mysqli, $query);

    if (!mysqli_query($mysqli, $query)) {
  echo "Что-то не то $query".mysql_error()."<br><br>";
  $result = mysqli_query($query);
}}
else {
  echo array_shift($errors);
  }
}
?>
<form class="" action="" method="post">
  <p>
  <input type="text" name="name"  value='<?=$name?>'>
  <button type="submit" name="change_name">Изменить название банка</button>
  </p>
  <p>
  <input type="text" name="inn" value='<?=$inn?>'>
  <button type="submit" name="change_inn">Изменить ИНН</button>
  </p>
  <p>
  <input type="text" name="country" value='<?=$country?>'>
  <button type="submit" name="change_country" >Изменить страну</button>
  </p>
  <p>
  <input type="text" name="class"  value='<?=$class?>'>
  <button type="submit" name="change_class">Изменить класс надежности</button>
  </p>
  <p>
  <input type="text" name="volume"  value='<?=$volume?>'>
  <button type="submit" name="change_volume">Изменить объем активов</button>
  </p>
</form>

<p><a href="database.php">Назад к сведениям</a></p>
</body>
</html>
