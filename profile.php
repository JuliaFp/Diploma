<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/modal.css">
    <link rel="stylesheet" href="../css/number.css">
    <link rel="stylesheet" href="../css/card.css">
    <link rel="stylesheet" href="../css/divider.css">
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
                    <li><a href="profile.php">Профиль</a></li>
                    <li><a href="logout.php">Выход</a></li>
                  
                </ul>
                <button id="nav-btn" class="nav-button">
                 <img id="nav-btn-img" src="../img/nav-open.svg" alt="Nav button">
              </button>
              </div>
         
	</div>
</div>
</header>


<style>
 .profile-container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #f9f9f9;
}

.profile-image {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto 20px;
}

.profile-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.profile-details {
    text-align: center;
    color: black;
    font-family: 'Century gothic';
}

.profile-details h2 {
    margin: 0 0 10px;
}

.profile-details p {
    margin: 0;
}
    </style>
<body>
<div>
<div class="profile-container" style="margin-top: 250px; margin-bottom: 300px;">
    <div class="profile-image">
        <img src="/img/user.png" alt="Profile Picture">
    </div>
    <div class="profile-details">
<?php

session_start();


if (!isset($_SESSION['id_user'])) {
    header('Location: authoriz.php');
    exit;
}

include 'config.php';

$user_id = $_SESSION['id_user'];

$sql = "SELECT users.email, users.login, users.status, orders.rocket_name FROM users LEFT JOIN orders ON users.id_user = orders.user_id
WHERE users.id_user = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo '<h3>Профиль пользователя:</h3>';
    echo '<p style="font-size: 18px; color: black;">Email: ' . $row['email'] . '</p>';
    echo '<p style="font-size: 18px; color: black;">Логин: ' . $row['login'] . '</p>';
    echo '<p style="font-size: 18px; color: black;">Статус заказа: ' . $row['status'] . '</p>';
    echo '<p style="font-size: 18px; color: black;">Заказ: ' . $row['rocket_name'] . '</p>';
    
}



$conn->close();
?></div>
</div>
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