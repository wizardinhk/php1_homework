<?php
session_start();
$pageHeader = 'Вторая страница';

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    //setcookie('username', null, -1, '/');
    unset($_SESSION['username']);

    // unset($_COOKIE['username']);
}

$username = null;
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} elseif (isset($_REQUEST['username']) && !empty($_REQUEST['username'])) {
    $username = $_REQUEST['username'];
    // $expires = time() + 86400;
    // setcookie('username', $username, $expires);
    $_SESSION['username'] = $username;
}

?>
<head>
    <meta charset="UTF-8">
    <title>Вторая</title>
</head>
<body>
<h1><?= $pageHeader ?></h1>
<?php include "menu.php"?>
<?php if ($username !== null) : ?>
    <p>Рады вас приветствовать, <?= $username ?>. <a href="?action=logout">[Выход]</a></p>
<?php else : ?>
    <form method="post">
        <input type="text" name="username" placeholder="Введите ваше имя"/>
        <input type="submit" value="Отправить"/>
    </form>
<?php endif ?>
</body>
