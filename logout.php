<?php 
session_start();

// Уничтожаем сессию
session_unset();
session_destroy();

// Перенаправляем пользователя обратно на главную страницу или на другую страницу
header("Location: index.php"); 
?>