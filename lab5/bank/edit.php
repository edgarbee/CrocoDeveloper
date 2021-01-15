<?php
  require '../db.php';
  $data=$_POST
 ?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Изменение данных. Бикбулатов</title>
  </head>
  <body>

<?php

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = mysqli_connect("localhost","f0505640_edgar","1234","f0505640_edgar");
    mysqli_set_charset($mysqli, "utf8mb4");
    $id=$_GET['id'];
    $dat = mysqli_query($mysqli,"SELECT * FROM banks WHERE id='$id'");

    if ($dat){
        // Для каждой строки из запроса
        while ($row = $dat->fetch_array()){
            $name = $row['name'];
            $INN = $row['inn'];
            $country = $row['country'];
            $clas = $row['clas'];
            $volume = $row['volume'];
            $id=$row['id'];
        }}
//Изменение названия
    if (isset($data['change_name'])) {
      if ($data['name']=='') {
        $errors[]='Введите новое наименование';
      }
      if ($data['name']==$name) {
        $errors[]='Такое наименование уже стоит';
      }
      if(empty($errors)){
        echo 'Вы успешно изменили наименование';
        $query="UPDATE banks SET name='$data[name]' WHERE id=$id";
        $result=mysqli_query($mysqli, $query);

        if (!mysqli_query($mysqli, $query)) {
      echo "Что-то не то $query".mysql_error()."<br><br>";
      $result = mysqli_query($query);
    }}
else {
      echo array_shift($errors);
    }
}

//Изменение жанра
if (isset($data['change_INN'])) {
  if ($data['INN']=='') {
    $errors[]='Введите новый ИНН';
  }
  if ($data['INN']==$INN) {
    $errors[]='Такой ИНН уже стоит';
  }
  if(empty($errors)){
    echo 'Вы успешно изменили ИНН';
    $query="UPDATE banks SET inn='$data[INN]' WHERE id=$id";
    $result=mysqli_query($mysqli, $query);

    if (!mysqli_query($mysqli, $query)) {
  echo "Что-то не то $query".mysql_error()."<br><br>";
  $result = mysqli_query($query);
}}
else {
  echo array_shift($errors);
  }
}

//Изменение разработчика
if (isset($data['change_country'])) {
  if ($data['country']=='') {
    $errors[]='Введите новую страну';
  }
  if ($data['country']==$country) {
    $errors[]='Такое название страны уже стоит';
  }
  if(empty($errors)){
    echo 'Вы успешно изменили название страны';
    $query="UPDATE banks SET country='$data[country]' WHERE id=$id";
    $result=mysqli_query($mysqli, $query);

    if (!mysqli_query($mysqli, $query)) {
  echo "Что-то не то $query".mysql_error()."<br><br>";
  $result = mysqli_query($query);
}}
else {
  echo array_shift($errors);
  }
}

//Изменение издателя
if (isset($data['change_clas'])) {
  if ($data['clas']=='') {
    $errors[]='Введите новый класс надёжности';
  }
  if ($data['clas']==$clas) {
    $errors[]='Такой класс надёжности уже стоит';
  }
  if(empty($errors)){
    echo 'Вы успешно изменили класс надёжности';
    $query="UPDATE banks SET clas='$data[clas]' WHERE id=$id";
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
    $errors[]='Введите новый объём активов';
  }
  if ($data['volume']==$volume) {
    $errors[]='Такой объём активов уже стоит';
  }
  if(empty($errors)){
    echo 'Вы успешно изменили объём активов';
    $query="UPDATE banks SET volume='$data[volume]' WHERE id=$id";
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
  <button type="submit" name="change_name">Изменить наименование банка</button>
  </p>
  <p>
  <input type="text" name="INN" value='<?=$INN?>'>
  <button type="submit" name="change_INN">Изменить ИНН</button>
  </p>
  <p>
  <input type="text" name="country" value='<?=$country?>'>
  <button type="submit" name="change_country" >Изменить страну</button>
  </p>
  <p>
  <input type="text" name="clas"  value='<?=$clas?>'>
  <button type="submit" name="change_clas">Изменить класс наджёности</button>
  </p>
  <p>
  <input type="text" name="volume"  value='<?=$volume?>'>
  <button type="submit" name="change_volume">Изменить объём активов</button>
  </p>
</form>

<p><a href="database.php">Назад к сведениям</a></p>
</body>
</html>
