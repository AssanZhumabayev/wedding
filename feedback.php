<?php
  // Простейший обработчик формы обратной связи by GuruWeba
  // Разместите этот код в файле, который указан как обработчик формы
  // Замените адреса email в переменных $to и $from ниже
  // Внимание! Данный обработчик не содержит защиты от злоумышленников

  if (isset($_POST['submit_btn'])) {
    // Email на который будет отправлено письмо
    $to = "assanzhumabayev@gmail.com";
    // Email от имени которого будет отправлено письмо.
    // Введите email вашего сайта, либо, в крайнем случае,
    // продублируйте email из $to (может не работать)
    $from = "bossluk@mail.ru";
    $subject = "Новый ответ на сайте"; // Тема присылаемого письма
    $message = "На сайте была заполнена форма обратной связи"."\r\n"
      // Если вы изменяли поля формы, внесите изменения ниже
      ."<b>Ответ</b> ".$_POST['theme']."\r\n"
      ."<b>Ваше имя:</b> ".$_POST['name']."\r\n"
      ."<b>Ваш телефон:</b> ".$_POST['phone']."\r\n"
      ."<b>Сообщение:</b> ".$_POST['message']."\r\n";
    $headers = "From: ".$from."\r\nContent-type: text/html; charset=utf-8\r\n";
    mail($to, $subject, $message, $headers);
  }
?>
