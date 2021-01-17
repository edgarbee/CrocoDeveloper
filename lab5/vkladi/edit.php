<html>
    <head> <title> Изменение данных по вкладу </title> </head>
    <body>
        <form action='save_edit.php' method='get'>
            <?php
            $mysqli = new mysqli("localhost","f0505640_edgar","1234","f0505640_edgar");
                if ($mysqli->connect_errno) {
                    echo "Не удалось подключиться к БД";
                }

                $key_id = $_GET['id'];

                $result = $mysqli->query(
                    "SELECT cont.id, cont.date,
                    dep_prog.name as dep,dep_prog.id as dep_id,
                    cont.st_cont FROM cont
                    LEFT JOIN dep_prog ON cont.id_dep=dep_prog.id
                    WHERE cont.id=$key_id"
                );

                if ($result && $st = $result->fetch_array()){
                    $date = $st['date'];
                    $dep = $st['dep'];
                    $dep_id = $st['dep_id'];
                    $st_cont = $st['st_cont'];

                }

                // Создание формы
                print "  Дата приобретения: <input name='date' size='50' placeholder='dd-mm-yyyy' type='date' value='$date'>";

                
                $result = $mysqli->query("SELECT id, name FROM dep_prog");
                echo "<br>Программа депозитов: <select name='id_dep'>";

                if ($result){
                    while ($row = $result->fetch_array()){
                        $id = $row['id'];
                        $name = $row['name'];

                        echo "<option value='$id'>$name</option>";
                    }
                }
                echo "</select>";

                print "<br>Стартовая сумма вклада: <input name='st_cont' size='30' type='text' value='$st_cont'>";
                print "<input type='hidden' name='id' size='30' value='$key_id'>";
            ?>
            <p><input type='submit' name='save' value='Сохранить'></p>
        </form>
        <p><button style='color: blue' onclick="window.location.href='vkladi.php'">Вернуться к списку программ депозитов</button></td></p>
    </body>
</html>
