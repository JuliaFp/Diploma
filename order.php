<?php
session_start();
include 'config.php';

if (isset($_SESSION['id_user'])) {
    $user_id = $_SESSION['id_user'];
    if (isset($_POST['rocketName'])) {
        $rocketName = $_POST['rocketName']; 

        // Добавление заказа в базу данных
        $sql = "INSERT INTO orders (user_id, rocket_name) VALUES ('$user_id', '$rocketName')";
        if (mysqli_query($conn, $sql)) {
            echo "Заказ успешно добавлен";
        } else {
            echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Ошибка: rocketName не установлен";
    }
} else {
    echo 'Для того чтобы заказать товар, пожалуйста, <a href="authoriz.php">войдите</a> в профиль.';
}

$conn->close();

?>