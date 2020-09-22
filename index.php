<?php echo "<link rel='stylesheet' href='css/style.css'>"; ?>

<body>

  <a id="button"></a>

  <header>
    <div class="wrap-logo">
    <a href="index.php" class="logo"> <img id="logo" src="images/img1.png" border=”0”><p id="logo_text">CrocoDev</p></a>
    </div>
    <nav>
      <a class="active" href="#lab" onclick="slowScroll('#main')">Лабораторные работы</a>
      <a href="#contact">Контакты</a>
      <a href="#about">О нас</a>
    </nav>
  </header>

  <div id="top">
     <h1>Программирование</h1>
     <h3>это не наука, а ремесло!</h3>
  </div>

<div id="lab">
  <h2>Лабораторные работы</h2>
  <ol class="bullet">
    <a href="lr1.php"><li>Лабораторная работа № 1. Часть 1. Введение в PHP</li></a>
  </ol>
</div>



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
