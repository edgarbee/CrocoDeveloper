<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title>
  </head>
  <body>
    <h2>Начальная страница. Разяпов</h2>
    <p> Дата и время:<p>
    <?php
        $d=date("d.m.Y H:i");
        echo($d);
    ?>

    <h2>Ссылки</h2>
    <ul id="nav" class="lin"> <!-- Собственные скрипты для просмотра и редактирования БД -->
          <p><li><a href="bank/database.php">База данных банков</a></li></p>
          <p><li><a href="dep/dep.php">Программы депозитов</a></p>
          <p><li><a href="vkladi/vkladi.php">Вклады</a></p>
    </ul>

    <h2>Добавление</h2>
    <ul id="nav">
        <li><a href="reg_banks/reg_banks.html">Добавление банка в список данных</a></li>
    </ul>

    <button onclick="window.location.href='gen_pdf.php'">PDF-версия таблицы</button>
    <button onclick="window.location.href='gen_xls.php'">XML-версия таблицы</button>

  </body>
</html>
