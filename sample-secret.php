<?php
$host = 'localhost';
$username = 'your_database_username'; //поменяйте данные на свои
$password = 'your_database_password';
$database = 'your_database_name';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}
?>