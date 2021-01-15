<?php
$mysqli = new mysqli("localhost","f0505640_edgar","1234","f0505640_edgar");
      if ($mysqli->connect_errno) {
          echo "Не удалось подключиться к БД";
      }

      $name=$_GET['name'];
      $bank=$_GET['bank_id'];
      $proc=$_GET['proc'];


      // Выполнение запроса
      $result = $mysqli->query("INSERT INTO dep_prog
   SET name='$name', name_bank='$bank', proc='$proc'");

      echo '<meta http-equiv="refresh" content="0;URL=dep.php">';
  ?>
