<?php echo "<link rel='stylesheet' href='css/style.css'>"; ?>

<body>

    <a id="button"></a>

  <header>
    <div class="wrap-logo">
    <a href="index.php" class="logo"> <img id="logo" src="images/img1.png" border=”0”><p id="logo_text">CrocoDev</p></a>
    </div>
    <nav>
      <a class="active" href="index.php#lab" onclick="slowScroll('#main')">Лабораторные работы</a>
      <a href="#contact">Контакты</a>
      <a href="#about">О нас</a>
    </nav>
  </header>

<h2 style="  margin: 0 auto;
  width: 350px;
  text-align: center;
  margin-bottom: 60px;
  font-family: 'Roboto', sans-serif;
  border: 2px solid #FA5F4C;
  border-radius: 15px;
  padding: 20px;">Лабораторная работа № 1</h2>

  <table>
    <tr>
      <td><b>Упражнение 1-1</b></td>
    </tr>
    <tr>
      <td>Дата и время: <?php $d=date("d.m.Y H:i"); echo($d); ?></td>
    </tr>
  </table><br>

  <table>
    <tr>
      <td><b>Упражнение 1-2</b></td>
    </tr>
    <tr>
      <td><?php
      $var1= '3';
      $var2 = 5;
      echo $var1 . ' - ' . gettype($var1) . '<br>';
      print ($var2 . ' - ' . gettype($var2) . '<br>');
      $var3= 'abc';
      var_dump ($var3);
      echo '<br>';
      $var4=123;var_dump ($var4);?></td>
    </tr>
  </table><br>

  <table>
    <tr>
      <td><b>Упражнение 1-3<br>Арифметические операции:</b></td>
    </tr>
    <tr>
      <td><?php
       $x=rand(1,10);
       $y=rand(1,10);
       print ($x . ' + ' . $y . ' = ' . ($x+$y) . '<br>');
       print ($x . ' - ' . $y . ' = ' . ($x-$y) . '<br>');
       print ($x . ' * ' . $y . ' = ' . ($x*$y) . '<br>');
       print ($x . ' / ' . $y . ' = ' . ($x/$y) . '<br>');
      ?></td>
    </tr>
  </table><br>

  <table>
    <tr>
      <td><b>Упражнение 1-4</b></td>
    </tr>
    <tr>
      <td><?php
      $NUM_E = 2.71828;
      echo ('Число e = ' . $NUM_E . '<br>');
      $num_e1 = $NUM_E;
      echo ('$num_e1 = ' . $num_e1 . ' - ' . gettype($num_e1) .  '<br>');
      $num_e1 = 'CrocoDev';
      echo ('$num_e1 = ' . $num_e1 . ' - ' . gettype($num_e1) .  '<br>');
      $num_e1 = 3;
      echo ('$num_e1 = ' . $num_e1 . ' - ' . gettype($num_e1) .  '<br>');
      $num_e1 = true;
      echo ('$num_e1 = ' . $num_e1 . ' - ' . gettype($num_e1) .  '<br>');
       ?></td>
    </tr>
  </table><br>

  <h2 style="  margin: 0 auto;
    width: 400px;
    text-align: center;
    margin-top: 60px;
    margin-bottom: 60px;
    font-family: 'Roboto', sans-serif;
    border: 2px solid #FA5F4C;
    border-radius: 15px;
    padding: 20px;">САМОСТОЯТЕЛЬНАЯ РАБОТА № 1 </h2>

    <table>
      <tr>
        <td><b>ЗАДАЧА № 1-1</b></td>
      </tr>
      <tr>
        <td><?php
         $a=rand(-20,20);
         $c=rand(-20,20);
         $d=rand(-20,20);
         $f=$c-$a+1;
         print ('( ' . '(' . $c . '/' . $d . ') + 3 * ' . '(' . $a . '/ 2) ) / ' . '(' . $c . ' - (' . $a . ') + 1) = ' . ($c/$d+3*$a/2)/$f);
        ?></td>
      </tr>
      <tr>
        <td><?php
         $a=rand(-20,20);
         $c=rand(-20,20);
         $d=rand(-20,20);
         $f=$c+$a-1;
         print ('( 2 * ' . $c . ' - 42 * ' . $d . ' ) / (' . $c . ' + (' . $a . ') - 1 ) = ' . (2*$c-42*$d)/$f);
        ?></td>
      </tr>
    </table><br>

    <h2 style="  margin: 0 auto;
      width: 400px;
      text-align: center;
      margin-top: 60px;
      margin-bottom: 60px;
      font-family: 'Roboto', sans-serif;
      border: 2px solid #FA5F4C;
      border-radius: 15px;
      padding: 20px;">ПРАКТИЧЕСКАЯ РАБОТА № 2</h2>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
            function slowScroll(id) {
            $('html, body').animate({
              scrollTop: $(id).offset().top
            }, 500);
          }

          $(document).on("scroll", function (){
            if($(window).scrollTop() === 0)
              $("header").removeClass("fixed");
            else {
              $("header").attr("class","fixed");
            }
          })
        </script>

      <script>
          $(document).ready(function(){
          $("a").on('click', function(event) {
            if (this.hash !== "") {
              event.preventDefault();
              var hash = this.hash;

          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 500, function(){
            window.location.hash = hash;
          });
        }
      });
    });
    </script>

    <script type="text/javascript">
    var btn = $('#button');

    $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
    });

    btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
    });

    </script>

    <script src="https://kit.fontawesome.com/4e4b238876.js" crossorigin="anonymous"></script>
</body>
