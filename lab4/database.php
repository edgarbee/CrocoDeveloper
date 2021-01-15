<?php
require "db.php";
$data=$_POST;
$bank='bank';
?>

<html>
    <head> <title> Сведения. Разяпов </title> </head>

    <h2>Список банков:</h2>
    <table border="1">
        <tr>
            <th> Наименование </th> <th> ИНН </th> <th> Страна </th>
            <th> Класс надежности </th> <th> Объем активов </th> <th> Редактирование </th> <th> Удаление </th>
        </tr>
        <?php
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $mysqli = mysqli_connect("localhost","f0505640_edgar","1234","f0505640_edgar");
            mysqli_set_charset($mysqli, "utf8mb4");

            // Запрос на выборку сведений о пользователях
            $result = $mysqli->query("SELECT * FROM bank");

            if ($result){
                // Для каждой строки из запроса
                while ($row = $result->fetch_array()){
                    $name = $row['name'];
                    $inn = $row['inn'];
                    $country = $row['country'];
                    $class = $row['class'];
                    $volume = $row['volume'];
                    $id=$row['id'];

                    echo "<tr>";
                    echo "<td>$name</td><td>$inn</td><td>$country</td><td>$class</td><td>$volume</td>";
                    echo "<td><a href='edit.php?id=$id'>Редактировать</a></td>";
                    echo "<td><a href='delete.php?id=$id'>Удалить</a></td>";
                    echo "</tr>";
                }
                print "</table>";
            }

            print("<p> <a href='index.php'> Вернуться на главную </a> </p>");
        ?>
</html>
