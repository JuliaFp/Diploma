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
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/media.css">
    <link rel="shortcut icon" href="../img/logotip.png" type="image/x-icon">
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
                    <li><a href="contact.php">Контакты</a></li>
                    <?php 
                    session_start();
                    if(isset($_SESSION['id_user'])){
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
<div class="banner" style="margin-top: 100px; width: 100%; height: 200px; overflow: hidden;">
  <img src="/img/ban.gif" style="width: 100%;" class="bottom-image">
  <div class="proxima"><img src="/img/proxima_b.png" style="height: 220px; width: 220px; cursor: pointer;" id="prox" class="top-image"></div>
  <div class="earth"><img src="/img/earth.png" style="height: 190px; width: 190px; cursor: pointer;" id="earth" class="top-image"></div>
 <div class="mars"><img src="/img/mars.png" style="height: 190px; width: 190px; cursor: pointer; padding-left: 20px;" id="mars" class="top-image"></div> 
</div>
<div class="modal" id="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <img src="/img/proxima_b.png" style="width: 250px; height: 250px;">
        <h2>Проксима Центавра b</h2>
        <p style="color: black;">В 2016 году была открыта планета Проксима b, которую неофициально называли близняшкой нашей Земли.

Прохладная планета со средней температурой минус 39 градусов по Цельсию. С другой стороны – просто как обычная суровая российская зима. Зато это полностью компенсируется другими ее плюсами.
Теоретически, на этой планете вполне могла бы быть жизнь. Но если такое и было, то в 2017 году все живое здесь было уничтожено. Родная звезда планеты Проксима b устроила катастрофу. На ней произошла мощная вспышка, которая выжгла все живое, если оно было на этой планете. </p>
    </div>
</div>
<div class="modal" id="modals">
    <div class="modal-content">
        <span class="closes">&times;</span>
        <img src="/img/mars.png" style="width: 250px; height: 250px;">
        <h2>Марс</h2>
        <p style="color: black;">Привлекательность Марса осложняется тем, что воздух там на 96% состоит из углекислого газа. Если не решить вопрос с выработкой пригодного для жизни кислорода, любые идеи о колонизации зайдут в тупик. Один из возможных выходов — цианобактерии. Они поглощают углекислый газ и превращают его в кислород. Цианобактерии действуют по принципу фотосинтеза, но в отличие от растений им не нужен солнечный свет. 
        Ученые обнаружили, что бактерии справляются со своей задачей даже в самых глубоких впадинах океана. Если перевести цианобактерии на Марс, есть вероятность, что они смогут там прижиться и космонавтам будет чем дышать. Космические агентства и частные компании уже думают о возможной реализации такого проекта. </p>
    </div>
</div>
<div class="modal" id="modalt">
    <div class="modal-content">
        <span class="closet">&times;</span>
        <img src="/img/earth.png" style="width: 250px; height: 250px;">
        <h2>Земля</h2>
        <p style="color: black;">Мы находимся в зоне «Златовласки». Так астрофизики называют зоны, которые находятся на идеальном расстоянии от своей звезды. Удаленность от Солнца – ровно настолько, чтобы появилась толща воды в жидком состоянии.
Мощное магнитное поле. Чтобы блокировать солнечный ветер, который уничтожает атмосферы планет. И космическую радиацию, сжигающую все живое.
Вода. Кислород и водород довольно распространенные в космосе элементы. На нашей планете оказались в нужной пропорции.
Твердая основа. Многие из известных нам планет Солнечной системы и экзопланет принадлежат к газовым гигантам. Сложные формы жизни на них, по-видимому, невозможны. </p>
    </div>
</div>
<div class="contact-container">
    <h1>Обратная связь</h1>
    <form action="sms.php" method="post">
        <label for="names">Имя:</label>
        <input type="text" id="names" name="names" pattern="^[А-Яа-я]+$" title="Пожалуйста, используйте только русские буквы и дефисы, без специальных символов" required>
    
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" title="Пожалуйста, введите корректный адрес электронной почты" required>
    
        <label for="message">Сообщение:</label>
        <textarea id="text" name="text" rows="4" required></textarea>
    
        <button type="submit" class="batton">Отправить</button>

    </form>
</div>

<footer style="height: auto; background-color: #fff;">
    <h2 style="color: #ff80ff; padding:40px; margin:0; text-align:center;">Made with 🤍 by COSMOS.RU!</h2>

</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="../js/script.js"></script>
<script src="../js/number.js"></script>
<script src="../js/number2.js"></script>
<script src="../js/burger.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.132.2/build/three.min.js"></script>
</body>
</html>