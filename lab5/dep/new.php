<html>
    <head> <title> Добавление новых программ </title> </head>
    <body>
        <H2>Добавление новых программ</H2>
        <form action="save_new.php" method="get">
            Название программы: <input name="name" size="50" type="text">
            <br>
            <?php
            $mysqli = new mysqli("localhost","f0505640_edgar","1234","f0505640_edgar");
                if ($mysqli->connect_errno) {
                    echo "Не удалось подключиться к БД";
                }

                // Получение данных об играх
                $result = $mysqli->query("SELECT id, name FROM banks");
                echo "<br>Банк: <select name='bank_id'>";

                if ($result){
                    while ($row = $result->fetch_array()){
                        $id = $row['id'];
                        $name = $row['name'];

                        echo "<option value='$id'>$name</option>";
                    }
                }
                echo "</select>";
            ?>
            <br>Процент годовых: <input name="proc" size="30" type="text">
            <p>
                <input name="add" type="submit" value="Добавить">
                <input name="b2" type="reset" value="Очистить">
            </p>
        </form>
        <p><button style='color: blue' onclick="window.location.href='dep.php'">Вернуться к списку программ депозитов</button></td></p>
    </body>
</html>
