<?php 
$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$to = "nat4shail@yandex.ru";

if (trim($name) == "") 
  echo "Вы не ввели имя пользователя";
else if(strlen(trim($name)) <= 1)
  echo "Такого имени не существует";
else if(trim($email) == "" || trim($password) == "" || "" || trim($_POST["message"]) == "")
  echo "Введите все двнные";
else {
  $_POST['password'] = md5($password);
  echo "<h1>Все данные</h1>";
  foreach ($_POST as $key => $value) 
    echo "<p>$value</p>";
}


if (mail($to, "Заказ с сайта", "ФИО:".$name.". E-mail: ".$email))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}
  
