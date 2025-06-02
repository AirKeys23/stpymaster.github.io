    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $subject = 'Сообщение с сайта';

  $body = "Имя: $name\n";
  $body .= "Email: $email\n";
  $body .= "Телефон: $phone\n";
  $body .= "Сообщение: $message";

  $result = mail('AirKeys90@gmail.com', $subject, $body);

  if ($result) {http_response_code(200);
    echo 'Сообщение успешно отправлено.';
  } else {http_response_code(500);
    echo 'Произошла ошибка при отправке сообщения, попробуйте еще раз.';
  }
} 
else {http_response_code(405);
  echo 'Метод не поддерживается.';
}
?>
<html>
    <body>
      <br>  <a href="http://host1857960.hostland.pro/zayavka.html">Вернуться назад</a>
    </body>
</html>