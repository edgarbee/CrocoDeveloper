<?php
$mysqli = new mysqli("localhost","f0505640_edgar","1234","f0505640_edgar");
    if ($mysqli->connect_errno){
        echo "Не удалось подключиться к БД";
    }

    $id = $_GET['id'];
    $date= $_GET['date'];
    $dep_id= $_GET['dep_id'];
    $st_cont=$_GET['st_cont'];

    $result = $mysqli->query("UPDATE cont
        SET date='$date', id_dep='$dep_id', st_cont='$st_cont'
        WHERE id='$id'"
    );

    header("Location: vkladi.php");
    exit;
?>
