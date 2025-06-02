<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // получаем данные из формы
  $name = $_POST['name'];
  $email = $_POST['email'];
  $date = $_POST['date'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  // формируем заголовок письма
  $subject = 'Сообщение с сайта';

  // формируем тело письма
  $body = "Имя: $name\n";
  $body .= "Email: $email\n";
  $body .= "Перезвонить: $date\n";
  $body .= "Телефон: $phone\n";
  $body .= "Сообщение: $message";

  // отправляем письмо
  $result = mail('AirKeys90@gmail.com', $subject, $body);


  if ($result) {
    http_response_code(200);
    echo 'Сообщение успешно отправлено.';
  } else {
    http_response_code(500);
    echo 'Произошла ошибка при отправке сообщения, попробуйте еще раз.';
  }
} else {
  http_response_code(405);
  echo 'Метод не поддерживается.';
}
?>
<html>
    <body>
      <br>  <a href="http://host1857960.hostland.pro/zayavka.html">Вернуться назад</a>
    </body>
</html>