<?php
    $mysqli = new mysqli("localhost","f0505640_edgar","1234","f0505640_edgar");
    
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к БД";
    }

    $id = $_GET['id'];

    $result = $mysqli->query("DELETE FROM dep_prog WHERE id='$id'");

    header("Location: dep.php");
    exit;
?>
