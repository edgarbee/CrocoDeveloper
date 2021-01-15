<html>
    <head> <title> Редактирование данных по программам </title> </head>
    <body>
        <form action='save_edit.php' method='get'>
            <?php
            $mysqli = new mysqli("localhost","edgar","1234","edgar");
                if ($mysqli->connect_errno) {
                    echo "Не удалось подключиться к БД";
                }

                $key_id = $_GET['id'];

                $result = $mysqli->query(
                    "SELECT dep_prog.id, dep_prog.name,
                    banks.name as bank,banks.id as bank_id,
                    dep_prog.proc FROM dep_prog
                    LEFT JOIN banks ON dep_prog.name_bank=banks.id
                    WHERE dep_prog.id=$key_id"
                );

                if ($result && $st = $result->fetch_array()){
                    $name = $st['name'];
                    $bank = $st['bank'];
                    $bank_id = $st['bank_id'];
                    $proc = $st['proc'];

                }

                // Создание формы
                print "Название программы: <input name='name' size='50' type='text' value='$name'>";


                $result = $mysqli->query("SELECT id, name FROM banks WHERE id=$bank_id");
                echo "<br>Банк: <select name='bank_id'>";

                if ($result){
                    while ($row = $result->fetch_array()){
                        $id = $row['id'];
                        $name = $row['name'];

                        echo "<option value='$id'>$name</option>";
                    }
                }
                echo "</select>";

                print "<br>Процент годовых: <input name='proc' size='30' type='text' value='$proc'>";
                print "<input type='hidden' name='id' size='30' value='$key_id'>";
            ?>
            <p><input type='submit' name='save' value='Сохранить'></p>
        </form>
        <p><button style='color: blue' onclick="window.location.href='dep_prog.php'">Вернуться к списку программ депозитов</button></td></p>
    </body>
</html>
