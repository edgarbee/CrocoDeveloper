<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = mysqli_connect("localhost","f0505640_edgar","1234","f0505640_edgar");
    mysqli_set_charset($mysqli, "utf8mb4");

    $id = $_GET['id'];

    $result = $mysqli->query("DELETE FROM bank WHERE id='$id'");

    header("Location: database.php");
    exit;
?>
