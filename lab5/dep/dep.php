<html>
    <head> <title> Сведения о программах </title>
    </head>

    <h2 id="h2"> Список программ депозитов: </h2>
    <div class="container">
    <table border="1">
        <tr>
            <th> Название программы </th> <th> Название банка </th><th> Процент годовых </th>
        </tr>
        <?php
        require "../db.php";
        $mysqli = new mysqli("localhost","f0505640_edgar","1234","f0505640_edgar");
            if ($mysqli->connect_errno) {
                echo "Не удалось подключиться к БД";
            }

            // Запрос на выборку сведений о пользователях
            $result = $mysqli->query("SELECT dep_prog.id, dep_prog.name, banks.name as bank, dep_prog.proc FROM dep_prog
                LEFT JOIN banks ON dep_prog.name_bank=banks.id"
            );

            $counter=0;
            if ($result){
                while ($row = $result->fetch_array()){
                    $id = $row['id'];
                    $name=$row['name'];;
                    $bank = $row['bank'];
                    $proc = $row['proc'];

                    echo "<tr>";
                    echo "<td>$name</td><td>$bank</td><td>$proc</td>";
                    echo "<td><button style='color: blue' onclick=\"window.location.href='edit.php?id=$id'\">Редактировать</button></td>";
                    echo "<td><button style='color: blue' onclick=\"window.location.href='delete.php?id=$id'\">Удалить</button></td>";
                    echo "</tr>";

                    $counter++;
                }
            }
            print "</table>";
            print("<p id=count>Всего программ: $counter </p>");
        ?>
    <button id="button" style='color: blue' onclick="window.location.href='new.php'">Добавить программу</button></td><br>
    <button id="button" style='color: blue' onclick="window.location.href='../index.php'">Вернуться в меню</button></td>
</html>
