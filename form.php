<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');

    if (empty($name) || empty($email) || empty($phone)) {
        die('Заполните все поля');
    }

    $to = 'JustONE31@yandex.ru';
    $subject = 'Клиент сайта Tvoidomsochi.';
    $message = "Имя пользователя: $name\nЭлектронная почта: $email\nНомер телефона: $phone";
    $headers = "Content-type:text/plain; charset=UTF-8\r\n";
    $headers .= "From: no-reply@tvoidomsochi.ru\r\n";  // замените на свой домен
    $headers .= "Reply-To: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo 'Письмо отправлено';
    } else {
        echo 'Ошибка отправки';
    }
} else {
    echo 'Метод не поддерживается';
}
?>