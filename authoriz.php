<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/modal.css">
    <link rel="stylesheet" href="../css/registr.css">
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
<div class="container">
<style>
    .error {
        background-color: lightcoral;
        padding: 10px;
        margin-top: 60px;
        color: red;
       
    }
</style>

<form method="post">
        <h2 style="color: #d89dff;">Авторизация</h2>
        <input type="text" name="login" pattern=".{4,30}[A-Za-zА-Яа-яЁё]" title="Введите логин, чтобы он не заканчивался на цифру" placeholder="Логин" required>
        <input type="password" id="password-input" name="password" pattern=".{6,}[A-Za-z]" title="Введите пароль, используя минимум 6 символов, цифры и латинские буквы" placeholder="Пароль" required>
       <label style="float:left;"><input type="checkbox" style="width:16px;height:15px; cursor:pointer;"> Запомнить меня</label>
        <button type="submit" name="btn-sub" class="btn btn-primary" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Войти</button>
        <a href="registration.php" style="float:left; "><p>Регистрация</p></a>
        <a href="#" style="float:right;"><p>Забыли пароль?</p></a>
      <?php
session_start();

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE login='$login'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['id_user'] = $row['id_user'];
            header('Location: profile.php');
            exit;  
        } else {
            echo '<div class="error">Неверный логин или пароль</div>';
        }
    } else {
        echo '<div class="error">Пользователь не найден</div>';
    }
}
?>
      </form>
</div>
<script src="../js/burger.js"></script>
</body>
</html>