<?php
require_once 'security_controller.php';
?>
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
<h1><?= $pageHeader ?></h1>
<?php include "menu.php"?>
<?php if ($username !== null) : ?>
    <p>Рады вас приветствовать, <?= $username ?>. <a href="?action=logout">[Выход]</a></p>
<?php elseif ($username == null) : ?>
<a href="?action=login">[Вход]</a>
<?php endif ?>

<?php if ($_SESSION['login'] == true ) : ?>
    <form method="post">
        <input type="text" name="username" placeholder="Введите ваше имя"/>
        <input type="submit" value="Отправить"/>
    </form>
<?php endif ?>

</body>
