<html>
    <head> <title> Сведения о вкладах </title>

    </head>

    <h2 id="h2"> Список вкладов: </h2>
    <div class="container">
    <table border="1">
        <tr>
            <th> Дата создания вклада </th> <th> Название программы депозитов </th><th> Стартовая сумма вклада</th>
        </tr>
        <?php
        require "../db.php";
            $mysqli = new mysqli("localhost","f0505640_edgar","1234","f0505640_edgar");
            if ($mysqli->connect_errno) {
                echo "Не удалось подключиться к БД";
            }

            // Запрос на выборку сведений о пользователях
            $result = $mysqli->query("SELECT cont.id, cont.date, dep_prog.name as dep, cont.st_cont FROM cont
                LEFT JOIN dep_prog ON cont.id_dep=dep_prog.id"
            );

            $counter=0;
            if ($result){
                while ($row = $result->fetch_array()){
                    $id = $row['id'];
                    $date=$row['date'];;
                    $dep = $row['dep'];
                    $st_cont = $row['st_cont'];
                    echo "<tr>";
                    echo "<td>$date</td><td>$dep</td><td>$st_cont</td>";
                    echo "<td><button style='color: blue' onclick=\"window.location.href='edit.php?id=$id'\">Редактировать</button></td>";
                    echo "<td><button style='color: blue' onclick=\"window.location.href='delete.php?id=$id'\">Удалить</button></td>";
                    echo "</tr>";

                    $counter++;
                }
            }
            print "</table>";
            print("<p id=count>Всего программ: $counter </p>");
        ?>
    <button id="button" style='color: blue' onclick="window.location.href='new.php'">Добавить вклад</button></td><br>
    <button id="button" style='color: blue' onclick="window.location.href='../index.php'">Вернуться в меню</button></td>
</html>
