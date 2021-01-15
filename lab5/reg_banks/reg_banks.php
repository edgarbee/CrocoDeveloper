<?php
require "../db.php";
$data=$_POST;
if (isset($data['do_add'])) {
  //Проверка
  $errors=array();
  if(trim($data['name'])==''){
    $errors[]='Введите наименование банка';
  }
  if(trim($data['INN'])==''){
    $errors[]='Введите ИНН';
  }
  if($data['country']==''){
    $errors[]='Введите страну';
  }
  if($data['clas']==''){
    $errors[]='Введите класс надёжности!';
  }
  if($data['volume']==''){
    $errors[]='Введите объём активов!';
  }
  if(R::count('banks', 'name=?', array($data['name']))>0){
    $errors[]='Такой банк уже добавлен!';
  }
  if(empty($errors)){
    $bank= R::dispense('banks');
    $bank->name=$data['name'];
    $bank->INN=$data['INN'];
    $bank->country=$data['country'];
    $bank->clas=$data['clas'];
    $bank->volume=$data['volume'];
    R::store($bank);
    echo '<div>Вы успешно добавили банк в базу данных</div><hr>';
}else {
    echo '<div>'.array_shift($errors).'</div><hr>';}}?>
<a href="reg_banks.html">Перейти к добавлению</a><br><a href="../index.php">Перейти в меню</a>
