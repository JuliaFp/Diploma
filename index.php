<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/modal.css">
  <link rel="stylesheet" href="../css/number.css">
  <link rel="stylesheet" href="../css/card.css">
  <link rel="stylesheet" href="../css/divider.css">
  <link rel="stylesheet" href="../css/media.css">
  <link rel="shortcut icon" href="../img/logotip.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
  <title>Космос</title>
</head>

<body>
  <div class="background"></div>

  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]//background-color: rgba(38,47,51, 0.5); -->

  <header>
    <div id="wrapper">
      <div class="header">
        <div class="logo">
          <div class="text-with-background"></div>
          <a href="index.php">COSMOS</a>
        </div>
        <div class="Menu">
          <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="line.php">Космические линии</a></li>
            <li><a href="#target">О нас</a></li>
            <li><a href="contact.php">Контакты</a></li>
            <?php
            session_start();
            if (isset($_SESSION['id_user'])) {
              echo '<li><a href="profile.php">Профиль</a></li>';
              echo '<li><a href="logout.php">Выход</a></li>';
            } else {
              echo '<li><b><a href="authoriz.php">Вход</a></b></li>';
              echo '<li><b><a href="registration.php">Регистрация</a></b></li>';
            }
            ?>

          </ul>            
          <button id="nav-btn" class="nav-button">
            <img id="nav-btn-img" src="../img/nav-open.svg" alt="Nav button">
            </button>
        </div>


      </div>
    </div>
  </header>
  <div class="banner">
    <img src="/img/ban.gif" class="bottom-image">
    <div class="proxima"><img src="/img/proxima_b.png" id="prox" class="top-image"></div>
    <div class="earth"><img src="/img/earth.png" id="earth" class="top-image"></div>
    <div class="mars"><img src="/img/mars.png" id="mars" class="top-image"></div>
  </div>
  <div class="modal" id="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <img src="/img/proxima_b.png">
      <h2>Проксима Центавра b</h2>
      <p style="color: black;">В 2016 году была открыта планета Проксима b, которую неофициально называли близняшкой нашей Земли.

        Прохладная планета со средней температурой минус 39 градусов по Цельсию. С другой стороны – просто как обычная суровая российская зима. Зато это полностью компенсируется другими ее плюсами.
        Теоретически, на этой планете вполне могла бы быть жизнь. Но если такое и было, то в 2017 году все живое здесь было уничтожено. Родная звезда планеты Проксима b устроила катастрофу. На ней произошла мощная вспышка, которая выжгла все живое, если оно было на этой планете. </p>
    </div>
  </div>
  <div class="modal" id="modals">
    <div class="modal-content">
      <span class="closes">&times;</span>
      <img src="/img/mars.png">
      <h2>Марс</h2>
      <p style="color: black;">Привлекательность Марса осложняется тем, что воздух там на 96% состоит из углекислого газа. Если не решить вопрос с выработкой пригодного для жизни кислорода, любые идеи о колонизации зайдут в тупик. Один из возможных выходов — цианобактерии. Они поглощают углекислый газ и превращают его в кислород. Цианобактерии действуют по принципу фотосинтеза, но в отличие от растений им не нужен солнечный свет.
        Ученые обнаружили, что бактерии справляются со своей задачей даже в самых глубоких впадинах океана. Если перевести цианобактерии на Марс, есть вероятность, что они смогут там прижиться и космонавтам будет чем дышать. Космические агентства и частные компании уже думают о возможной реализации такого проекта. </p>
    </div>
  </div>
  <div class="modal" id="modalt">
    <div class="modal-content">
      <span class="closet">&times;</span>
      <img src="/img/earth.png">
      <h2>Земля</h2>
      <p style="color: black;">Мы находимся в зоне «Златовласки». Так астрофизики называют зоны, которые находятся на идеальном расстоянии от своей звезды. Удаленность от Солнца – ровно настолько, чтобы появилась толща воды в жидком состоянии.
        Мощное магнитное поле. Чтобы блокировать солнечный ветер, который уничтожает атмосферы планет. И космическую радиацию, сжигающую все живое.
        Вода. Кислород и водород довольно распространенные в космосе элементы. На нашей планете оказались в нужной пропорции.
        Твердая основа. Многие из известных нам планет Солнечной системы и экзопланет принадлежат к газовым гигантам. Сложные формы жизни на них, по-видимому, невозможны. </p>
    </div>
  </div>
  <div class="block">
    <b>
      <p class="name-block">Интересные факты</p>
    </b>
    <div class="container">

      <div class="rounded-box">

        <div class="counter" style="text-align: center; margin-top: 60px;">
          <img src="/img/icon-space.png" style="width: 100px; height: 100px;"><br>
          <span class="count" data-target="563">0</span>
          <p style="color: gray; padding: 0 20px;">Человека было в космосе</p>

        </div>

      </div>
      <div class="rounded-box">
        <div class="counter" style="text-align: center; margin-top: 60px;">
          <img src="/img/moon.png" style="width: 100px; height: 100px;"><br>
          <span class="counts" data-target="12">0</span>
          <p style="color: gray; padding: 0 20px;">Человек было на луне</p>
        </div>
      </div>
      <div class="rounded-box">
        <div class="counter" style="text-align: center; margin-top: 60px;">
          <img src="/img/animal.png" style="width: 100px; height: 100px;"><br>
          <span class="countes" data-target="40">0</span>
          <p style="color: gray; padding: 0 20px;">Свыше разных видов животных было в космосе</p>
        </div>
      </div>


    </div>
    <hr class="divider">
  </div>

  <section style="margin-top: -80px;">

    <div class="card left">

      <div class="front">
        <img src="../img/yuriy.jpg" alt="">

      </div>

      <div class="back">

        <div class="back-content left">
          <p style="color: gray; padding: 20px;">Юрий Алексеевич Гагарин (9 марта 1934 — 27 марта 1968) — лётчик-космонавт СССР, Герой Советского Союза, кавалер высших знаков отличия ряда государств, почётный гражданин многих российских и зарубежных городов</p>

        </div>

      </div>
    </div>

    <div class="cardt center">

      <div class="frontd">
        <img src="../img/luna.jpg" alt="">

      </div>

      <div class="backd">

        <div class="back-contentd center">
          <p style="color: gray; padding: 20px;">Почему луна красная? Дело в том, что обычно Луна отражает солнечный свет, но во время своего затмения она попадает в полутень Земли. Солнечные лучи, преломлённые атмосферой нашей планеты, пробиваются и достигают поверхности спутника. Часть из них рассеивается, а часть отражается и окашивает ночное светило в красноватый оттенок, так сильно напоминающий цвет крови.</p>

        </div>

      </div>

    </div>



    <div class="cards right">

      <div class="fronts">
        <img src="../img/black_d.jpg" alt="">

      </div>

      <div class="backs">

        <div class="back-contents right">
          <p style="color: gray; padding: 20px;">Чёрная дыра — это область космоса с очень сильным гравитационным притяжением.
            Чёрные дыры притягивают к себе материю, а она образует вокруг них аккреционный диск — гигантскую структуру, которая быстро вращается и светится за счёт взаимодействия сил трения и гравитации.</p>

        </div>

      </div>
    </div>

  </section>

  <div class="about" id="target">
    <div class="about-content">
      <b>
        <p style="color: gray; font-size: 30px;">О нас</p>
      </b>
      <img src="../img/rocket.png" width="550" height="325">
      <p><br>Мы компания, занимающаяся запуском людей в космос. Наша цель - путешествие по планетам,
        которое возможно в будущем для обычных людей. Также занимаемся изучением планет, на которых возможна жизнь.</p>

    </div>
  </div>
  <footer style="height: auto; background-color: #fff;">
    <h2 style="color: #ff80ff; padding:40px; margin:0; text-align:center;">Made with 🤍 by COSMOS.RU!</h2>

  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="../js/script.js"></script>
  <script src="../js/burger.js"></script>
  <script src="../js/number.js"></script>
  <script src="../js/number2.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/build/three.min.js"></script>
</body>

</html>