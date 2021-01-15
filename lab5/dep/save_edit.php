<?php
$mysqli = new mysqli("localhost","f0505640_edgar","1234","f0505640_edgar");
    if ($mysqli->connect_errno){
        echo "Не удалось подключиться к БД";
    }

    $id = $_GET['id'];
    $name= $_GET['name'];
    $bank_id= $_GET['bank_id'];
    $proc=$_GET['proc'];

    $result = $mysqli->query("UPDATE dep_prog
        SET name='$name', name_bank='$bank_id', proc='$proc'
        WHERE id='$id'"
    );

    header("Location: dep.php");
    exit;
?>
