<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['name'])) {
	$phone = $_POST['name'];
}
if (isset($_POST['phone'])) {
	$name = $_POST['phone'];
}

/* Сюда впишите свою эл. почту */
$myaddres  = "bobavova45@gmail.com"; // кому отправляем

/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Зворотній зв'язок!\nТелефон: $phone\nИмя: $name";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub = 'Заказ'; //сабж
$email = 'Заказ обратного звонка'; // от кого
$send = mail($myaddres, $sub, $mes, "Content-type:text/plain; charset = utf-8\r\nFrom:$email");

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="refresh" content="3; url=index.html">
	<title>Дякуємо! Ми зв'яжемось з Вами!</title>
	<meta name="generator">
	<script type="text/javascript">
		setTimeout('location.replace("/index.html")', 5000);
		/*Изменить текущий адрес страницы через 5 секунды (5000 миллисекунд)*/
	</script>
</head>

<body>
	<h1>Спасибо! Мы свяжемся с вами!</h1>
</body>

</html>