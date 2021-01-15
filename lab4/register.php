<?php
require "db.php";

$data=$_POST;

if (isset($data['do_add'])) {
  //Проверка
  $errors=array();
  if(trim($data['name'])==''){
    $errors[]='Введите название банка';
  }
  if(trim($data['inn'])==''){
    $errors[]='Введите ИНН';
  }
  if($data['country']==''){
    $errors[]='Введите страну';
  }
  if($data['class']==''){
    $errors[]='Введите класс надежности';
  }
  if($data['volume']==''){
    $errors[]='Введите объём активов';
  }

  if(R::count('bank', 'name=?', array($data['name']))>0){
    $errors[]='Такой банк уже добавлен!';
  }

  if(empty($errors)){
    $bank= R::dispense('bank');
    $bank->name=$data['name'];
    $bank->inn=$data['inn'];
    $bank->country=$data['country'];
    $bank->class=$data['class'];
    $bank->volume=$data['volume'];
    R::store($bank);
    echo '<div>Вы успешно добавили банк в базу данных</div><hr>';
}else {
    echo '<div>'.array_shift($errors).'</div><hr>';
  }
}
 ?>
<a href="register.html">Перейти к добавлению</a>
<br>
<a href="index.php">Перейти в меню</a>
