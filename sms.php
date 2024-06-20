<?php // Получение данных из формы

include 'config.php';

$names = htmlspecialchars($_POST['names'], ENT_QUOTES);
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$text = htmlspecialchars($_POST['text'], ENT_QUOTES);

// SQL-запрос для записи данных в базу
$sql = "INSERT INTO sms (names, email, text) VALUES ('$names', '$email', '$text')";

if (mysqli_query($conn, $sql)) {
  $message = urlencode('Сообщение успешно отправлено!');
  header('Location: contact.php?message=' . $message);
  
  
  
} else {
  echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>