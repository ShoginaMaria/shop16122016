<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Форма обратной связи</title>
</head>
<body>
<?php
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['mess'])) {$mess = $_POST['mess'];}
if (empty($name))
{
echo "Не указано имя!";
echo "<a href=file:///C:/Users/Мария/Desktop/магистратура/зафиевский/book_store/book_store/contact.html>Вернуться к заполнению формы</a>";
exit;
}
if (empty($email))
{
echo "Не указан e-mail!";
echo "<a href=file:///C:/Users/Мария/Desktop/магистратура/зафиевский/book_store/book_store/contact.html>Вернуться к заполнению формы</a>";
exit;
}
if (empty($mess))
{
echo "Сообщение не написано!";
echo "<a href=file:///C:/Users/Мария/Desktop/магистратура/зафиевский/book_store/book_store/contact.html>Вернуться к заполнению формы</a>";
exit;
}
$to = "mousemh@mail.ru</a>";
$headers = "Content-type: text/plain; charset = windows-1251";
$subject = "Сообщение с вашего сайта";
$message = "Имя пославшего: $name \nЭлектронный адрес: $email \nСообщение: $mess";
$send = mail ($to, $subject, $message, $headers);
if ($send == 'true')
{
echo "Спасибо за отправку вашего сообщения!";
echo "<a href=index.html>Нажмите, чтобы вернуться на главную страницу";
}
else
{
echo "
Ошибка. Сообщение не отправлено!";
}
?>
</body>
</html>