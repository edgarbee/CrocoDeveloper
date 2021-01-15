<?php
$mysqli = new mysqli("localhost","f0505640_edgar","1234","f0505640_edgar");
      if ($mysqli->connect_errno) {
          echo "Не удалось подключиться к БД";
      }

      $date=$_GET['date'];
      $id_dep=$_GET['id_dep'];
      $st_cont=$_GET['st_cont'];


      // Выполнение запроса
      $result = $mysqli->query("INSERT INTO cont
   SET date='$date', id_dep='$id_dep', st_cont='$st_cont'");

      echo '<meta http-equiv="refresh" content="0;URL=vkladi.php">';
  ?>
