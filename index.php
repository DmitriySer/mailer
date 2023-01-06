<?php
require 'vendor/mailer.php';

//use vendor\mailer\Mailer;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="vendor/mailer.php" method='post'>
        <label for="mail">Почта</label>
        <input type="email" name='mail'>
        <button type="submit" name="sub">Отправить</button>
    </form>
</body>
</html>

<!--Нет SMTP ключа -->